<?php
include('../../templates/base.php');
?>

<title>Article</title>
<style>
    a:hover {
        text-decoration: underline!important;
    }
    
    a {
        text-decoration: none;
    }
</style>

{% endblock %} {% block body %}
<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1 ps-3">{{ content.panel5 }}</span>

</nav>

<div class="container border">
    <div class="container ps-2 mt-3 border-bottom">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Articles</li>
            </ol>
        </nav>

    </div>

    <div class="row">

        <div class="col">
            <div class="container">
                <div class="row mt-3  mb-3">
                    <div class="article mt-3">
                        {% for id, title, body, brief, user_id in article %}
                        <div class="row border-top p-3 m-3">
                            <div class="col-1">
                                <img src="" alt="article.img">
                            </div>
                            <div class="col">
                                <h5>
                                    <a href="{{ url_for('article.read_article', title=title, id=id) }}" class=" text-decoration-none">{{ title }}</a>
                                </h5>
                                <h5>{{ brief }}</h5>
                                <p>{{ body }}</p>
                            </div>
                            {% if session and session.get('id') == user_id %}
                            <div class="col-2">
                                <button class="btn btn-warning"><a href="{{ url_for('article.edit', id=id, title=title) }}" class="text-decoration-none text-black">Edit Article</a></button>
                            </div>
                            {% endif %}
                        </div>
                        {% endfor %}
                    </div>

                </div>



            </div>

        </div>

    </div>

</div>

{% endblock %}