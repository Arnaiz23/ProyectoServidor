<header id="header">
    <div id="headerAdmin">
        <span class="material-icons-outlined">
            account_box
        </span>
        <h2>Administrador</h2>
    </div>
    <div id="headerNav">
        <div class="headerNavOpcion">
            <span class="material-icons-outlined {% block claseHome1 %}{% endblock %}">
                home
            </span>
            <a href="home" {% block claseHome %}{% endblock %}>HOME</a>
        </div>
        <div class="headerNavOpcion">
            <span class="material-icons-outlined {% block claseUser1 %}{% endblock %}">
                people
            </span>
            <a href="usuarios" {% block claseUser %}{% endblock %}>USUARIOS</a>
        </div>
        <div class="headerNavOpcion">
            <span class="material-icons-outlined {% block claseProducto1 %}{% endblock %}">
                inventory_2
            </span>
            <a href="productos" {% block claseProducto %}{% endblock %}>PRODUCTOS</a>
        </div>
        <div class="headerNavOpcion">
            <span class="material-icons-outlined {% block clasePregunta1 %}{% endblock %}">
                help
            </span>
            <a href="preguntas" {% block clasePregunta %}{% endblock %}>PREGUNTAS</a>
        </div>
    </div>
</header>