Extension for Mageto 1.x. It provides Scroll Depth plugin for Google Analytics.

Read more about Scroll Depth plugin at [http://scrolldepth.parsnip.io/](http://scrolldepth.parsnip.io/).

Go to store backend. Tnen menu `System` > `Configuration` > `Templates-Master` > `Google Analytics`. Select `Yes` for option `Enable plugin` under section `Scroll Depth plugin`.

You can set additional options to plugin by using setting `Plugin options`.

Example is below (http://prnt.sc/bxp41r)

![Settings example](http://image.prntscr.com/image/7438373cd9a940ba9ca6dfce93b8d6c6.png)

Such settings generates follow code:

```html
<script type="text/javascript">
    jQuery(function() {
        jQuery.scrollDepth({
            elements: ['.footer-container']
        });
    });
</script>
```