<?php include("parts/header.php"); ?> 


    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="de name">Professorale Karrieremuster der Frühen Neuzeit - Blog</span>
                        <span class="en name">Professorial Career Patterns of the Early Modern History - Blog</span>

                        <hr class="star-light">
                        <span class="de skills">Entwicklung einer wissenschaftlichen Methode zur Forschung auf online verfügbaren und verteilten Forschungsdatenbanken der Universitätsgeschichte.</span>
                        <span class="en skills">Development of a scientific method for research on online available and distributed research databases of academic history</span>

                    </div>
                </div>
            </div>
        </div>
    </header>

<?php
echo $_SERVER['PHP_SELF'];
if (strpos($_SERVER['PHP_SELF'],"#RODBH2019")>0) {
?>


<?php echo section_begin("Doktorandensymposium: Research on Online Databases in History (RODBH 2019), 4./5. April 2019","Doctoral Symposium on Research on Online Databases in History (RODBH 2019), April 4th-5th 2019, Leipzig",$i++,true,"05.12.2018 - Thomas Riechert"); ?> 
 
<p class="de">Aufruf zur Einreichung von Beiträgen: 20.12.2018, Deadline: 15.02.2019, Benachrichtigung über die Annahme: 01.03.2019<!--more--></p>
<p class="en">CfP will be published December, 20th 2018, Workshop Paper deadline: February, 15th 2019, Final notification to authors: March, 1st 2019<!--more--></p>

<?php
}
?>

<?php include("parts/footer.php"); ?> 
