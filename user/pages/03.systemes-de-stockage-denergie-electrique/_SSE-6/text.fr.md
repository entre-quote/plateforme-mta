---
title: 'Le matériel'
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

Le matériel proposé pour les essais SSE est le suivant :

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
![](012.jpg?cropZoom=728,456&classes=caption "Manutention d’un pack batterie")
![](021-rogne.jpg?cropZoom=728,456&classes=caption  "Zone essais SSE modules")
![](025.jpg?cropZoom=728,456&classes=caption  "Enceinte SSE 11m&sup3;")
![](20170427_143417.jpg?728,456&classes=caption  "Essai SSE pack avec conditionnement d’air")
![](IMG_20180215_113932.jpg?728,456&classes=caption  "Essai pack avec setup HIL")
![](IMG_20180215_114101.jpg?728,456&classes=caption  "Enceintes essais calendaires")
![](IMG_20180215_114324.jpg?728,456&classes=caption  "Enceinte SSE 4m")
![](IMG_20180215_114720.jpg?728,456&classes=caption  "Batterie NiCd 28V aéronautique")
[/owl-carousel]
