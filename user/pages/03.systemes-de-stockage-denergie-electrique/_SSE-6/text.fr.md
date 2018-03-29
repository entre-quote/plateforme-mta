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

[owl-carousel items=1 margin=40 loop=true autoplay=true autoplayHoverPause=true nav=true dots=false]
![](012.jpg?cropZoom=728,456 "<span>1/8</span> Manutention d’un pack batterie")
![](021-rogne.jpg?cropZoom=728,456 "<span>2/8</span> Zone essais SSE modules")
![](025.jpg?cropZoom=728,456 "<span>3/8</span> Enceinte SSE 11m3")
![](20170427_143417.jpg "<span>4/8</span> Essai SSE pack avec conditionnement d’air")
![](IMG_20180215_113932.jpg "<span>5/8</span> Essai pack avec setup HIL")
![](IMG_20180215_114101.jpg "<span>6/8</span> Enceintes essais calendaires")
![](IMG_20180215_114324.jpg "<span>7/8</span> Enceinte SSE 4m3")
![](IMG_20180215_114720.jpg "<span>8/8</span> Batterie NiCd 28V aéronautique")
[/owl-carousel]