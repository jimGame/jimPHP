/**
 * Created by Administrator on 2016/7/1.
 */
// $(function () {

// })
var Utils = {
    getSize:function () {
        var size = {};
        // size.width = window.innerWidth
        //     || document.documentElement.clientWidth
        //     || document.body.clientWidth;
        // size.height = window.innerHeight
        //     || document.documentElement.clientHeight
        //     || document.body.clientHeight;
        size.width  = screen.availWidth;
        size.height = screen.availHeight;
        return size;
    }
}
