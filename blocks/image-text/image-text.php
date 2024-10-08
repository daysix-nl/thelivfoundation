<style>
.left-a:before {
    right: 15px;
    content: "";
    display: block;
    position: absolute;
    width: 100vw;
    top: 0;
    bottom: 0;
    z-index: 1;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-image: url('<?php the_field('image'); ?>');
    border-radius: 30px;
}
</style>

<section class="<?php the_field('background-color'); ?> <?php the_field('padding');?> <?php echo (get_field('margin') ? 'my-5 md:my-10' : ''); ?>">
    <div class="container grid grid-cols-2 gap-3 md:gap-5 ">
        <div class="col-span-1 left-a relative min-h-[400px] h-full">
        </div>
        <div class="col-span-1 md:py-2">
            <?php 
                $allowed_blocks_text = ['acf/title', 'acf/paragraphs', 'acf/list', 'acf/button'  ];
            ?>
           <InnerBlocks 
                allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>"
            />
        </div>
    </div>
</section>