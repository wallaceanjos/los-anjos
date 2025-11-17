<?php
    $placeholder_img = get_template_directory_uri() . '/assets/images/placeholder.png';
    $placeholder_video = get_template_directory_uri() . '/assets/images/placeholder_2.png';
    // Recupera o array de vídeos
    $videos = get_option('global_institutional_video', array());
    $video_id = '';
    
    // Se houver vídeos cadastrados, filtra os vazios e seleciona um aleatório
    if ( ! empty($videos) && is_array($videos) ) {
        // Remove entradas vazias
        $videos = array_filter($videos);
        if ( ! empty($videos) ) {
            // Seleciona um link aleatório
            $random_video_url = $videos[array_rand($videos)];
    
            // Tenta extrair o ID do vídeo a partir da URL
            if ( preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $random_video_url, $matches) ) {
                $video_id = $matches[1];
            }
        }
    }
    
    // Caso não haja vídeo definido, define um vídeo padrão (por exemplo, Rick Astley)
    if ( empty($video_id) ) {
        $video_id = 'dQw4w9WgXcQ';
    }
?>
<style>
    .mbYTP_wrapper{
        filter: contrast(1.5) sepia(1) hue-rotate(14deg) saturate(11) brightness(2);
        mix-blend-mode: screen;
    }
    .visibility-hidden{
        visibility: hidden;
    }
</style>
<!-- start section -->
<section class="parallax p-0" data-parallax-background-ratio="0.3" style="background:url(<?php echo esc_url($placeholder_video); ?>) no-repeat center center / cover #1E1E3F;">
    <div id="homepage" data-background="<?php echo esc_url($placeholder_img); ?>" style="min-height:100vh;">
        <!-- Video BG Init -->
        <div class="player"
            data-property="{videoURL:'https://www.youtube.com/watch?v=<?php echo esc_attr($video_id); ?>',containment:'#homepage',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1,addRaster:false, quality:'default'}">
        </div>
        <div class="with-bg-size" style="position:absolute; top:0px; left:0px; z-index:0; width:100%; height: 100%; margin:auto;">
            <div class="position-absolute cover-background top-0px left-0px w-100 h-100" data-parallax-background-ratio="0.5" style="background: url(<?php echo esc_url($placeholder_video); ?>)no-repeat center-center/cover;"></div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-500px d-flex flex-column justify-content-center padding-8-rem-tb visibility-hidden wow animate__fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="alt-font font-weight-600 title-large text-purple letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65 la-card">Los Anjos Agency. Design & Web</h1>
                        <a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações." class="btn btn-extra-large btn-expand-ltr text-purple btn-rounded align-self-start font-weight-600">Comece agora.<span class="bg-white"></span></a>
                    </div>
                </div>
            </div>
            <div class="scroll-down-bottom visibility-hidden wow animate__fadeInUp" data-wow-delay="0.2s">
                <a href="#about" class="section-link d-block w-2px h-35px bg-white mx-auto right-0px left-0px position-absolute">
                    <span class="scroll-down-text alt-font font-weight-600 text-purple letter-spacing-minus-1-half margin-5px-bottom">scroll</span>
                </a>
            </div>
        </div>
        <!-- End Video BG Init -->
    </div>
</section>
<!-- end section -->

