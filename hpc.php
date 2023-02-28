<?php
include("db.php");
?>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/transport.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<div class="bg-secondary rounded-0 text-white">
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h3 class="fw-bold faculty-heading">HPC</h3>
            </div>
        </div>
    </div>
</div>

<section class="bg-grey p-3" style="background-color:#fff !important;">
    <div class="row">
        <div>
        High-performance computing (HPC) cluster facility is a multi-purpose Linux cluster 
        (Xeon-based nodes with Gigabit internode connectivity) devised to address problems 
        that involve heavy computation. HPC facility is available for research and teaching
        purposes to all members of the academic community of IIT Mandi. We have 171 compute 
        nodes with (Xeon Gold/Bronze processors) 64 to 128 Gb of Ram with 10G connectivity 
        & 8 to 24 threads on each node. The facility currently hosts two sub-clusters -- CPUHPC 
        (10.8.1.19) and GPU HPC (10.8.1.20). The CPUHPC cluster hosts compute nodes optimized 
        for CPU-parallel jobs whereas the GPU HPC cluster hosts nodes containing high-end 
        Nvidia GPU cards optimized for GPU-intensive parallel jobs. Members can get HPC account 
        by filling google form from the IIT Mandi HPC official website.
        <br>
        <br>
        <a href="https://sites.google.com/iitmandi.ac.in/hpc-iit-mandi?pli=1&authuser=3" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For More Information</a>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>