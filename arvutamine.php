<?php

    $külga = $_GET['t1'];
    $külgb = $_GET['t2'];
    $kõrgus = $_GET['t3'];
    $pindala = ($külga * $külgb) / 2 * $kõrgus;

    printf("Trapetsi pindala on: %d", $pindala);
