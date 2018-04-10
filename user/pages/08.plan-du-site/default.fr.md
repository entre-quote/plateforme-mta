---
title: 'Plan du site'
process:
    markdown: true
    twig: true
visible: false
content:
    items: '@root.descendents'
    order:
        by: default
        dir: asc
---

<ul>
    {% for p in page.collection %}

    <li><a href="{{ p.url }}">{{ p.title }}</a></li>

    {% endfor %}
</ul>
