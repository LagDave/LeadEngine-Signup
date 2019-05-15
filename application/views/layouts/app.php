<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page_title ?></title>
    
    <link rel="icon" href="http://leadengine.live/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/base.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/navigation_bar.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/pricing.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/testimonials.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/case_study.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/pricing_component2.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/form.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/success.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/new_pricing.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/how-to-get-started.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/footer.css">

    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:700|Montserrat|Poppins|Wire+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>     
<body>

<?php $this->load->view('navs/nav') ?>

<br>
<div class="mt-5 container">
    <?php $this->load->view($view)?>
</div>
<br>

<?php $this->load->view('components/footer') ?>
<?php $this->load->view('components/pricing_component') ?>
<?php $this->load->view('components/case_study_component') ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src='<?= base_url()?>assets/js/scripts.js'></script>  
<script src='<?= base_url()?>assets/js/components_summoner.js'></script>  
</body>
</html>