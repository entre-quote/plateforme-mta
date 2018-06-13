---
title: 'Testing equipment'
media_order: '012.jpg,021-rogne.jpg,025.jpg,20170427_143417.jpg,IMG_20180215_113932.jpg,IMG_20180215_114101.jpg,IMG_20180215_114324.jpg,IMG_20180215_114720.jpg'
image_align: left
process:
    markdown: true
    twig: true
content:
    items:
        - '@self.children'
    order:
        by: folder
        dir: asc
    limit: 0
    pagination: false
---

Our test equipment for ESS includes the following:

{% for p in page.collection %}
{% set first_image = p.media.files|first %}
<div class="hardware">
<div>
{{first_image}}
</div>

<div>
{{ p.content }}
</div>
</div>

{% endfor %}

[owl-carousel items=1 margin=40 loop=true nav=true dots=false]
![](012.jpg?cropZoom=728,456&classes=caption "Battery pack handling")
![](021-rogne.jpg?cropZoom=728,456&classes=caption  "ESS modules test area")
![](025.jpg?cropZoom=728,456&classes=caption  "11m&sup3; temperature chamber for ESS test")
![](20170427_143417.jpg?728,456&classes=caption  "Battery pack testing with additional air cooling")
![](IMG_20180215_113932.jpg?728,456&classes=caption  "ESS test with HIL")
![](IMG_20180215_114101.jpg?728,456&classes=caption  "Calendar aging climatic room")
![](IMG_20180215_114324.jpg?728,456&classes=caption  "4m&sup3; thermal chamber")
![](IMG_20180215_114720.jpg?728,456&classes=caption  "Aeronautical 28V NiCd battery")
[/owl-carousel]
