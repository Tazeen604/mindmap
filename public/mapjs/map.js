var childx;
var childy;
var ax;
var by;
var check = 0;
var r = 15;
var input = new CanvasInput({
    onsubmit: function() {
        input.focus();
    }

});

function getfocus() {
    c.focus();
}

function draw_sib() {
    if (check == 1) {
        draw_sibling_arc();
    } else if (check == 2) {
        draw_multi_siblings();
    } else {
        draw_sibling();
    }
}

function draw_child() {
    var c = document.getElementById('myCanvas');
    var ctx = c.getContext('2d');
    ctx.lineWidth = 0.5;
    ctx.lineCap = 'butt';
    var stx = childx + 7;
    var sty = childy + 22;
    var endx = childx - 10;
    var endy = childy + 30;
    ctx.moveTo(stx, sty);
    ctx.lineTo(endx, endy);
    ctx.stroke();
    check = 0;

    drawinputbox(endx - 10, endy);

}

function draw_sibling() {
    var c = document.getElementById('myCanvas');
    var ctx = c.getContext('2d');

    ctx.beginPath();
    stx = ax + 30;
    sty = by - 7
    endx = stx + 10;
    endy = by;
    console.log(ax);
    console.log(by);
    ctx.moveTo(stx, sty);
    ctx.lineTo(endx, endy);
    ctx.stroke();
    check = 1;
    drawsiblingbox(endx - 10, endy);
}

function draw_multi_siblings() {
    var c = document.getElementById('myCanvas');
    var ctx = c.getContext('2d');
    ctx.beginPath();
    console.log(ax);
    console.log(by);
    stx1 = ax - 5;
    sty1 = by - 10;
    endx1 = stx1 + 40;
    endy1 = by - 10;
    ctx.moveTo(stx1, sty1);
    ctx.lineTo(endx1, endy1);
    stx = endx1;
    sty = endy1;
    endx = stx + 10;
    endy = by;
    ctx.moveTo(stx, sty);
    ctx.lineTo(endx, endy);
    ctx.stroke();
    check = 2;
    drawsiblingbox(endx1 - 10, endy);
}

function draw_sibling_arc() {
    var c = document.getElementById('myCanvas');
    var ctx = c.getContext('2d');
    ctx.beginPath();
    stx = ax + 25;
    sty = by + 8;
    endx = stx + 15;
    endy = by;
    check = 2;
    ctx.arc(stx, sty, r, 0 * Math.PI, 1.5 * Math.PI, true);
    ctx.stroke();
    drawsiblingbox(endx - 10, endy);
}

function drawrootbox(a, b) {

    input = new CanvasInput({
        canvas: document.getElementById('myCanvas'),
        fontSize: 7,
        width: 30,
        height: 20,
        backgroundColor: '#08bf67',
        x: a,
        y: b,
        fontColor: '#000',
        placeHolder: 'Enter message here...',
        borderColor: '#fff',
        padding: 1,
        boxShadow: '1px 1px 0px #fff',
        innerShadow: '0px 0px 5px rgba(0, 0, 0, 0.5)',
        onblur: function() {
            input.focus();
        }

    });

    childx = a;
    childy = b;
    input.render();
    input.focus();
    input.selectText();



}

function drawinputbox(a, b) {
    var input = new CanvasInput({
        canvas: document.getElementById('myCanvas'),
        fontSize: 6,
        width: 20,
        height: 12,
        backgroundColor: '#08bf67',
        x: a,
        y: b,
        fontColor: '#ffffff',
        placeHolder: 'Enter message here...',
        borderColor: '#fff',
        padding: 1,
        fontShadowBlur: 0,
        boxShadow: 0,
        innerShadow: 0

    });
    childx = a;
    childy = b;
    ax = a;
    by = b;
    input.focus();



}

function drawsiblingbox(a, b) {


    var input = new CanvasInput({
        canvas: document.getElementById('myCanvas'),
        fontSize: 6,
        width: 20,
        height: 12,
        backgroundColor: '#08bf67',
        x: a,
        y: b,
        fontColor: '#ffffff',
        placeHolder: 'Enter message here...',
        borderColor: '#fff',
        padding: 1,
        fontShadowBlur: 0,
        boxShadow: 0,
        innerShadow: 0

    });
    ax = a;
    by = b;
    console.log(ax);
    console.log(by);
    r = r + 5;
    input.focus();
}