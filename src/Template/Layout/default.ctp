<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= h($title) ?>
    </title>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->script('jquery-3.2.1.slim.min') ?>
    <?= $this->Html->script('bootstrap.min', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('popper.min', ['block' => 'scriptBottom']) ?>

    <!-- Fetch meta,css and js -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cake App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php 
                    echo $this->Html->link(
                        'Home',
                        '/',
                        ['class' => 'nav-link']
                    );
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
            <div class="my-2 my-lg-0">
                <?php 
                echo $this->Html->link(
                    'Register',
                    '/registration',
                    ['class' => 'btn btn-success my-2 my-sm-0']
                );
                echo '&nbsp;';
                echo $this->Html->link(
                    'Login',
                    '/login',
                    ['class' => 'btn btn-primary my-2 my-sm-0']
                );
                ?>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <!-- Footer -->
    <nav class="navbar fixed-bottom navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Fixed bottom</a>
    </nav>
    <!-- Footer -->
    <?= $this->fetch('scriptBottom') ?>
</body>
</html>
