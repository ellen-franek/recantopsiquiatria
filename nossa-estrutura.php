<?php include_once('inc/_header.php'); ?>
<div class="main">
    <div class="pag-interna n-estrutura">
        <div class="content-center">
            <div class="head-estrutura">
                <h2 class="title-section line-b">Nossa estrutura</h2>
                <div class="text">
                    <p>
                    Nossas clínicas possuem um elevado padrão de qualidade no tratamento de pessoas com dependência química e saúde mental. Dispomos de instalações com estrutura de hotelaria com piscina, academia ao ar livre, campo para atividades esportivas, médicos todos os dias, Unidade Hospitalar e uma estrutura de saúde formada por médicos clínicos e psiquiatras, psicólogos, terapeuta ocupacional, enfermeiros, entre outros, além de frota padronizada e ambulância 24h no local para qualquer intercorrência.
                    </p>
                </div>
            </div>
        </div>


        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="./dist/images/unidade01.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./dist/images/unidade02.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./dist/images/unidade03.png" style="width:100%">

            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>



        <div class="unidades">

            <h2 class="title-section line-b">Unidades</h2>
            <div class="flex-und" id="lightgallery">
                <div class="item-und" id="lightgalleryUM">
                    <div class="estrutura__images">
                        <a href="dist/images/und01.png" data-sub-html="Unidade Masculina Igarassu">
                            <img src="dist/images/und01.png">
                        </a>
                        <?php
                            $dir_name = "./dist/images/estrutura/unidade-masculina-igarassu";
                            $images = glob($dir_name."/*.{jpg,png,bmp}", GLOB_BRACE);
                            foreach($images as $image):
                        ?>
                                <a href="<?php echo $image; ?>" style="display:none;" data-sub-html="Unidade Masculina Igarassu">
                                    <img src="<?php echo $image; ?>">
                                </a>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <h3>Unidade Masculina Igarassu</h3>
                    <!-- <a href="#" class="btn-simple">Ver mais</a> -->
                </div>
                <div class="item-und" id="lightgalleryUF">
                    <div class="estrutura__images">
                        <a href="dist/images/und02.png" data-sub-html="Unidade Feminina">
                            <img src="dist/images/und02.png">
                        </a>
                        <?php
                            $dir_name = "./dist/images/estrutura/unidade-feminina";
                            $images = glob($dir_name."/*.{jpg,png,bmp}", GLOB_BRACE);
                            foreach($images as $image):
                        ?>
                                <a href="<?php echo $image; ?>" style="display:none;" data-sub-html="Unidade Feminina">
                                    <img src="<?php echo $image; ?>">
                                </a>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <h3>Unidade Exclusivamente Feminina</h3>
                    <!-- <a href="#" class="btn-simple">Ver mais</a> -->
                </div>
                <div class="item-und" id="lightgalleryUDC">
                    <div class="estrutura__images">
                        <a href="dist/images/und03.png" data-sub-html="Unidade de Desintoxicação e Crise">
                            <img src="dist/images/und03.png">
                        </a>
                        <?php
                            $dir_name = "./dist/images/estrutura/unidade-de-desintoxicacao-e-crise";
                            $images = glob($dir_name."/*.{jpg,png,bmp}", GLOB_BRACE);
                            foreach($images as $image):
                        ?>
                                <a href="<?php echo $image; ?>" style="display:none;" data-sub-html="Unidade de Desintoxicação e Crise">
                                    <img src="<?php echo $image; ?>">
                                </a>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <h3>Unidade de Desintoxicação e Crise</h3>
                    <!-- <a href="#" class="btn-simple">Ver mais</a> -->
                </div>
            </div>

        </div>
    </div>
    <?php include_once('inc/_formulario.php'); ?>
</div>
<?php include_once('inc/_footer.php'); ?>