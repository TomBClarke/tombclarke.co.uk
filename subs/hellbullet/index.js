var ctx,
    width,
    height,
    inPlay,
    arrowkeys = [false, false, false, false],
    shootkeys = [false, false, false, false],
    player,
    sprites = [],
    bots = [],
    shoots = [],
    toRemoveBots = [],
    toRemoveShots = [],
    lives,
    invincible,
    canShoot,
    botkills;

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
        if (k == 65 || k == 87 || k == 68 || k == 83) {
            shootkeys = [false, false, false, false];
            switch (k) {
                case 65:
                    shootkeys[3] = true;
                    break;
                case 87:
                    shootkeys[0] = true;
                    break;
                case 68:
                    shootkeys[1] = true;
                    break;
                case 83:
                    shootkeys[2] = true;
                    break;
            }
        }

        arrowkeys[k - 37] = true;
    };

    main.onkeyup = function(e) {
        arrowkeys[e.keyCode - 37] = false;
    };

    ctx = main.getContext("2d");

    arrowkeys = [false, false, false, false];
    shootkeys = [false, false, false, false];
    lives = 3;
    botkills = 0;
    invincible = false;
    inPlay = true;
    canShoot = true;
    sprites = [];
    bots = [];
    shoots = [];
    toRemoveBots = [];

    sprites.push(new BackGround());

    var guy = new Guy();
    sprites.push(guy);
    player = guy;


    tick();
}

function tick() {
    setTimeout(function() {
        $('#lives').text(lives);
        $('#bots').text(botkills);

        if (Math.random() < 0.01) {
            var newBot = new Bot();
            sprites.push(newBot);
            bots.push(newBot);
        }

        player.update();

        shootkeys.forEach(function(s, si) {
            if (s)
                shoot(si);
        });

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

            if (isColliding(b, player) && (toRemoveBots.indexOf(b) == -1)) {
                toRemoveBots.push(b);

                if (!invincible) {
                    lives--;
                    invincible = true;

                    if (lives < 1) {
                        $('#endgameholder').show();
                        $('#main').hide();
                        $('#info').hide();
                        timer.stop();
                        $('#finaltime').text(document.getElementById('time').getElementsByTagName('span')[0].innerHTML);
                        $('#finalbotkills').text($('#bots').text());
                        inPlay = false;
                    }

                    setTimeout(function() {
                        invincible = false;
                    }, 3000);
                }
            }
        });

        sprites.move(sprites.indexOf(player), sprites.length - 1);

        toRemoveBots.forEach(function(o) {
            botkills++;
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
        $('#info').css("color", invincible ? "#FFF" : "#000");
        ctx.fillStyle = invincible ? "#000000" : "#FFFFFF";
        ctx.fillRect(0, 0, width, height);
    };
}

function Guy() {
    this.lX = width / 2;
    this.lY = height / 2;
    this.size = 20;

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

    this.draw = function() {
        ctx.fillStyle = invincible ? "#FFFF00" : "#000000";
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

        switch (this.direction) {
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
    this.lX = Math.random() * width;
    this.lY = Math.random() * height;
    this.size = 10;

    this.update = function() {
        var xdiff = player.lX - this.lX;
        var ydiff = player.lY - this.lY;
        if (!invincible) {
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
        ctx.fillStyle = invincible ? "#0000FF" : "#888888";
        ctx.fillRect(this.lX, this.lY, this.size, this.size);
    };
}

function shoot(d) {
    if (canShoot) {
        canShoot = false;
        var newShot = new Shot(player.lX + (player.size / 2), player.lY + (player.size / 2), d);
        shoots.push(newShot);
        sprites.push(newShot);

        setTimeout(function() {
            canShoot = true;
        }, 100);
    }
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

var Stopwatch = function(elem, options) {

    var timer = createTimer(),
        startButton = createButton("start", start),
        stopButton = createButton("stop", stop),
        resetButton = createButton("reset", reset),
        offset,
        clock,
        interval;

    // default options
    options = options || {};
    options.delay = options.delay || 1;

    // append elements     
    elem.appendChild(timer);

    // initialize
    reset();

    // private functions
    function createTimer() {
        return document.createElement("span");
    }

    function createButton(action, handler) {
        var a = document.createElement("a");
        a.href = "#" + action;
        a.innerHTML = action;
        a.addEventListener("click", function(event) {
            handler();
            event.preventDefault();
        });
        return a;
    }

    function start() {
        if (!interval) {
            offset = Date.now();
            interval = setInterval(update, options.delay);
        }
    }

    function stop() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
    }

    function reset() {
        clock = 0;
        render(0);
    }

    function update() {
        clock += delta();
        render();
    }

    function render() {
        timer.innerHTML = sigFigs((clock / 1000), 3) + "s";
    }
    
    function sigFigs(n, sig) {
        var mult = Math.pow(10, sig - Math.floor(Math.log(n) / Math.LN10) - 1);
        return Math.round(n * mult) / mult;
    }

    function delta() {
        var now = Date.now(),
            d = now - offset;

        offset = now;
        return d;
    }

    // public API
    this.start = start;
    this.stop = stop;
    this.reset = reset;
};