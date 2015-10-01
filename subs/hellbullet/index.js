var ctx,
    width,
    height,
    inPlay,
    arrowkeys = [false, false, false, false],
    shootkeys = [false, false, false, false],
    lastX = 0, lastY = 0,
    guy,
    sprites = [],
    bots = [],
    shoots = [],
    toRemoveBots = [],
    toRemoveShots = [],
    timer;

function startGame() {
    var main = document.getElementById("main");
    main.tabindex = 0;
    main.contentEditable = true;

    main.focus();

    width = window.innerWidth;
    height = window.innerHeight;

    main.width = width;
    main.height = height;

    main.onkeydown = function(e) {
        var k = e.keyCode;
        if (k === 65 || k === 87 || k === 68 || k === 83) {
            var now = Date.now();
            switch (k) {
                case 65:
                    shootkeys[3] = true;
                    if (now - lastX > 1000)
                        shootkeys[0] = shootkeys[2] = false;
                    lastY = now;
                    shootkeys[1] = false;
                    break;
                case 87:
                    shootkeys[0] = true;
                    if (now - lastY > 1000)
                        shootkeys[1] = shootkeys[3] = false;
                    lastX = now;
                    shootkeys[2] = false;
                    break;
                case 68:
                    shootkeys[1] = true;
                    if (now - lastX > 1000)
                        shootkeys[0] = shootkeys[2] = false;
                    lastY = now;
                    shootkeys[3] = false;
                    break;
                case 83:
                    shootkeys[2] = true;
                    if (now - lastY > 1000)
                        shootkeys[1] = shootkeys[3] = false;
                    lastX = now;
                    shootkeys[0] = false;
                    break;
            }
        }
        if (k > 36 && k < 41)
            arrowkeys[k - 37] = true;
    };

    main.onkeyup = function(e) {
        var k = e.keyCode;
        if (k > 36 && k < 41)
            arrowkeys[k - 37] = false;
    };

    ctx = main.getContext("2d");

    arrowkeys = [false, false, false, false];
    shootkeys = [false, false, false, false];
    inPlay = true;
    sprites = [];
    bots = [];
    shoots = [];
    toRemoveBots = [];

    sprites.push(new BackGround());

    guy = new Guy();
    sprites.push(guy);


    tick();
}

function tick() {
    setTimeout(function() {
        $('#lives').text(guy.lives);
        $('#bots').text(guy.botkills);

        if (Math.random() < 0.01) {
            var newBot = new Bot();
            sprites.push(newBot);
            bots.push(newBot);
        }

        guy.update();
        guy.shoot();

        shoots.forEach(function(s) {
            s.update();
        });

        bots.forEach(function(b) {
            b.update();

            shoots.forEach(function(s) {
                if (isColliding(b, s)) {
                    toRemoveBots.push(b);
                }
            });

            if (isColliding(b, guy) && (toRemoveBots.indexOf(b) === -1)) {
                toRemoveBots.push(b);

                if (!guy.invincible) {
                    guy.lives--;
                    guy.invincible = true;

                    if (guy.lives < 1) {
                        $('#endgameholder').show();
                        $('#main').hide();
                        $('#info').hide();
                        timer.stop();
                        $('#finaltime').text(document.getElementById('time').getElementsByTagName('span')[0].innerHTML);
                        $('#finalbotkills').text($('#bots').text());
                        inPlay = false;
                    }

                    setTimeout(function() {
                        guy.invincible = false;
                    }, 3000);
                }
            }
        });

        sprites.move(sprites.indexOf(guy), sprites.length - 1);

        toRemoveBots.forEach(function(o) {
            guy.botkills++;
            var boti = bots.indexOf(o);
            if (boti > -1)
                bots.splice(boti, 1);

            var spritesi = sprites.indexOf(o);
            if (spritesi > -1)
                sprites.splice(spritesi, 1);
        });

        toRemoveShots.forEach(function(o) {
            var shoti = shoots.indexOf(o);
            if (shoti > -1)
                shoots.splice(shoti, 1);

            var spritesi = sprites.indexOf(o);
            if (spritesi > -1)
                sprites.splice(spritesi, 1);
        });

        toRemoveBots = [];
        toRemoveShots = [];

        sprites.forEach(function(s) {
            s.draw();
        });

        if (inPlay)
            tick();
    }, 0);
}

function BackGround() {
    
    this.draw = function() {
        $('#info').css("color", guy.invincible ? "#FFF" : "#000");
        ctx.fillStyle = guy.invincible ? "#000000" : "#FFFFFF";
        ctx.fillRect(0, 0, width, height);
    };
    
}

function Guy() {
    
    this.lX = width / 2;
    this.lY = height / 2;
    this.size = 20;
    this.lives = 3;
    this.invincible = false;
    this.botkills = 0;
    this.canShoot = true;

    this.update = function() {
        var speed = 1.5;
        if (arrowkeys[0])
            this.lX -= speed;
        if (arrowkeys[1])
            this.lY -= speed;
        if (arrowkeys[2])
            this.lX += speed;
        if (arrowkeys[3])
            this.lY += speed;

        if (this.lX < 0)
            this.lX = 0;
        if (this.lY < 0)
            this.lY = 0;
        if (this.lX > width - this.size)
            this.lX = width - this.size;
        if (this.lY > height - this.size)
            this.lY = height - this.size;
    };
    
    this.shoot = function() {
        if (this.canShoot) {
            var keyArr = [];
            shootkeys.forEach(function(s, si) {
                if (s)
                    keyArr.push(si);
            });
            if (keyArr.length === 0) return;

            this.canShoot = false;
            var newShot = new Shot(this.lX + (this.size / 2),
                                   this.lY + (this.size / 2), keyArr);
            shoots.push(newShot);
            sprites.push(newShot);

            setTimeout(function() {
                guy.canShoot = true; // Must be guy, because scope.
            }, 100);
        }
    };
    
    this.draw = function() {
        ctx.fillStyle = this.invincible ? "#FFFF00" : "#000000";
        ctx.fillRect(this.lX, this.lY, this.size, this.size);
    };
    
}

function Shot(startX, startY, direction) {
    
    this.lX = startX;
    this.lY = startY;
    this.size = 5;
    this.direction = direction;

    this.update = function() {
        var speed = 3;
        
        for (var i = 0; i < this.direction.length; i++) {
            switch (this.direction[i]) {
                case 0:
                    this.lY -= speed;
                    break;
                case 1:
                    this.lX += speed;
                    break;
                case 2:
                    this.lY += speed;
                    break;
                case 3:
                    this.lX -= speed;
                    break;
            }
        }

        if ((this.lX < 0) || (this.lY < 0) || (this.lX > (width - this.size)) || (this.lY > (height - this.size))) {
            toRemoveShots.push(this);
        }
    };

    this.draw = function() {
        ctx.fillStyle = "#FF0000";
        ctx.fillRect(this.lX, this.lY, this.size, this.size);
    };
    
}

function Bot() {
    
    do {
        this.lX = Math.random() * width;
        this.lY = Math.random() * height;
    } while (((this.lX - guy.lX)^2 + (this.lY - guy.lY)^2) < 401);
    this.size = 10;

    this.update = function() {
        var xdiff = guy.lX - this.lX;
        var ydiff = guy.lY - this.lY;
        if (!guy.invincible) {
            var xslowness = xdiff > 100 ? 500 : 100;
            var yslowness = ydiff > 100 ? 500 : 100;
            this.lX += (xdiff / xslowness);
            this.lY += (ydiff / yslowness);
        } else {
            var slowness = 1000;
            this.lX -= (xdiff / slowness);
            this.lY -= (ydiff / slowness);
        }
    };

    this.draw = function() {
        ctx.fillStyle = guy.invincible ? "#0000FF" : "#888888";
        ctx.fillRect(this.lX, this.lY, this.size, this.size);
    };
    
}

function isColliding(obj1, obj2) {
    x1 = obj1.lX + (obj1.size / 2);
    x2 = obj2.lX + (obj2.size / 2);
    y1 = obj1.lY + (obj1.size / 2);
    y2 = obj2.lY + (obj2.size / 2);

    var xdiff = Math.abs(x1 - x2);
    var ydiff = Math.abs(y1 - y2);
    var diff = Math.sqrt((xdiff * xdiff) + (ydiff * ydiff));

    return diff < ((obj1.size / 2) + (obj2.size / 2));
}

function restart() {
    $('#endgameholder').hide();
    $('#main').show();
    $('#info').show();
    $('#startgameholder').remove();

    $('#time').empty();
    var t = document.getElementById("time");
    timer = new Stopwatch(t);
    timer.start();

    startGame();
}

Array.prototype.move = function(old_index, new_index) {
    if (new_index >= this.length) {
        var k = new_index - this.length;
        while ((k--) + 1) {
            this.push(undefined);
        }
    }
    this.splice(new_index, 0, this.splice(old_index, 1)[0]);
};