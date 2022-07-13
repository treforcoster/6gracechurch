<?php $sectionData = get_section_data($sectionFieldData); ?>

<section id="<?php echo $sectionData->sectionOptions->section_id;?>"
         class="section section-svg-map
            bg-colour-<?php echo $sectionData -> sectionOptions->bg_colour;?>
            padding-top-<?php echo $sectionData ->sectionOptions->section_padding_top;?>
            padding-bottom-<?php echo $sectionData -> sectionOptions->section_padding_bottom;?>
            <?php echo $sectionData -> sectionOptions->text_size;?>
            <?php echo $sectionData -> sectionOptions->section_class;?>
           text-<?php echo $sectionData ->sectionOptions->text_colour;?>
         <?php echo $sectionData->sectionOptions->text_size;?>" >

  @include('components.components.component-background-image-portrait-landscape')

  <div class="<?php echo $sectionData->contentOptions->container_type;?> full-height">

    <div class="row full-height align-items-center <?php echo $sectionData->contentOptions->container_position;?>">

      <div class="<?php echo $sectionData->contentOptions->container_width;?>">

        <?php $sectionFieldData = get_sub_field('section'); ?>

        <?php if (have_rows('section')) :
            while (have_rows('section')) :
                the_row();?>
          <div class="map-wrapper">

          <div class="map-image">

                  <?php $image = get_sub_field('map_image');

                  if (!empty($image)) :
                      // vars
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                      $caption = $image['caption'];

                      // thumbnail
                      $size = 'acf-split-header-image';
                      $thumb = $image['sizes'][ $size ]; ?>


                    <img src="<?php echo $url?>" alt="<?php echo $alt?>">

                  <?php endif; ?>

              <?php endwhile;
          endif; ?>

          </div>
          <div class="map-markers">
            <?php echo $sectionFieldData['map_markers'];?>

          </div>

          </div>


      </div>

    </div>

  </div>

</section>
