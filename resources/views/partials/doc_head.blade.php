<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="GestPat est un gestionnaire virtuel de patients qui vous permet de renseigner les informations de vos patients, d'accéder plus facilement aux données relatives à vos patients, d'optimiser la gestion de vos patients">
    <meta name="keywords" content="gestionnaire, patients, gestion, patient, gestionnaire de patients, gestionnaire virtuel de patients, gestionnaire de patients virtuel, gestionnaire de patients en ligne, gestionnaire de patients gratuit, gestionnaire de patients en ligne gratuit, gestionnaire de patients en ligne gratuit en français, gestionnaire de patients en ligne gratuit en français">
    <meta name="author" content="VicoKev">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="favicon/doctor.png" type="image/x-icon">

    <!-- Sweet Alerts css -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

</head>