<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Censo etário Xtópolis</title>
    <meta name="description" content="Plataform de censo etário do muncipio Xtópolis.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><i class="bi bi-house-door-fill"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signin">Login <i class="bi bi-box-arrow-in-left"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup" title="Registre sua conta" >Inscrever-se <i class="bi bi-box-arrow-in-right"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mailview" title="Enviar email" >Avalie o site <i class="bi bi-box-arrow-in-right"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>/signin/logout" >Logout <i class="bi bi-box-arrow-right"></i></a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tecnologias
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://codeigniter4.github.io/userguide/">CodeIgniter4</a></li>
                    <li><a class="dropdown-item" href="https://contabo.com/en/vps/">Contabo</a></li>
                    <li><a class="dropdown-item" href="https://www.phpmyadmin.net/files/5.2.0/">phpmyadmin</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="https://www.aapanel.com/">aapanel</a></li>
                    <li><a class="dropdown-item" href="https://dev.mysql.com/downloads/mysql/">MySQL</a></li>
                    <li><a class="dropdown-item" href="https://developers.google.com/chart?hl=pt-br">Google chart</a></li>
                    <li><a class="dropdown-item" href="https://nginx.org/">nginx</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <div class="card">
  
  