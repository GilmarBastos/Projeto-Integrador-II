<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Censo etário Xtópolis</title>
    <meta name="description" content="Plataform de censo etário do muncipio Xtópolis.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><i class="bi bi-house-door-fill"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

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
                        <a class="nav-link" href="https://codeigniter4.github.io/userguide/" title="Documentação CodeIgniter 4">Codeigniter4</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://nginx.org/"> nginx</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://developers.google.com/chart?hl=pt-br" title="Documentação chart">Google chart</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://dev.mysql.com/downloads/mysql/">MySQL</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://www.aapanel.com/" title="Documentação chart">aapanel</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://www.phpmyadmin.net/files/5.2.0/" >phpmyadmin</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="https://contabo.com/en/vps/" title="Hospedagem Contabo" >Vps</a>
                        </li>
                    </ul>
                    <span class="navbar-text float-end">
                        <a class="nav-link" href="<?php echo base_url();?>/signin/logout" >Logout <i class="bi bi-box-arrow-right"></i></a>
                    </span>
                    </div>
                </div>
            </nav>
        </div>
  
  