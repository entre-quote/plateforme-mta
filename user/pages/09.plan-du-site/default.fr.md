---
title: 'Plan du site'
process:
    markdown: true
    twig: true
content:
    items: '@root.children'
    order:
        by: default
        dir: asc
---

<ul>
    {% for p in page.collection %}

    {% if p.title != 'Documentation' %}

    <li><a href="{{ p.url }}">{{ p.title }}</a></li>

    {% endif %}

    {% if p.children.count > 0 %}
        <ul>
            {% for sp in p.children %}
                <li><a href="{{p.url}}/#{{ sp.menu | hyphenize }}">{{ sp.title }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endfor %}
</ul>
