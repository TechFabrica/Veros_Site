<section class="main grid__container">
    <h2 class="main__title grid__item--4-12"><?php the_field('main__title'); ?></h2>
    <p class="main__subtitle grid__item--4-12"><?php the_field('main__subtitle'); ?></p>
    
    <div class="main__tabnav tabnav grid__item--4-12">
        <button class="main__tabnav-item tabnav__selector button button--borderless">Todas</button>
        <button class="main__tabnav-item tabnav__selector button button--borderless">Cães</button>
        <button class="main__tabnav-item tabnav__selector button button--borderless">Gatos</button>
        <button class="main__tabnav-item tabnav__selector button button--borderless">Silvestres</button>
    </div>

    <div class="main__cards-wrapper grid__item--4-12 grid__container grid__container--no-padding tabnav__card-pane">
        <?php
            $cards_data = get_field('main__cards');
            foreach($cards_data as $card):
            $class = '';
            
            $pet_types = $card['main__card-pet-type'];
            foreach($pet_types as $type):
                $class .= ' ' . $type;
            endforeach;
        ?>
        <div class="main__card card grid__item--4-6 tabnav__card<?php echo $class; ?>">
            <h3 class="main__card-title"><?php echo $card['main__card-title']; ?></h3>
            <p class="main__card-content"><?php echo $card['main__card-content']; ?></p>
            <a href="<?php echo $card['main__card-link']; ?>" class="main__card-link"><?php echo $card['main__card-link-text']; ?></a>
            <svg class="main__card-link-arrow" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.32345 7.67704C2.30017 7.65382 2.28169 7.62623 2.26909 7.59586C2.25649 7.56549 2.25 7.53293 2.25 7.50004C2.25 7.46716 2.25649 7.4346 2.26909 7.40422C2.28169 7.37385 2.30017 7.34626 2.32345 7.32304L5.14695 4.50004L2.32345 1.67704C2.3002 1.6538 2.28176 1.6262 2.26918 1.59583C2.25661 1.56546 2.25013 1.53291 2.25013 1.50004C2.25013 1.46717 2.25661 1.43462 2.26918 1.40425C2.28176 1.37388 2.3002 1.34629 2.32345 1.32304C2.34669 1.2998 2.37428 1.28136 2.40465 1.26878C2.43502 1.2562 2.46757 1.24973 2.50045 1.24973C2.53332 1.24973 2.56587 1.2562 2.59624 1.26878C2.62661 1.28136 2.6542 1.2998 2.67745 1.32304L5.67745 4.32304C5.70073 4.34626 5.7192 4.37385 5.7318 4.40422C5.74441 4.4346 5.75089 4.46716 5.75089 4.50004C5.75089 4.53292 5.74441 4.56549 5.7318 4.59586C5.7192 4.62623 5.70073 4.65382 5.67745 4.67704L2.67745 7.67704C2.65422 7.70032 2.62664 7.71879 2.59626 7.7314C2.56589 7.744 2.53333 7.75049 2.50045 7.75049C2.46756 7.75049 2.435 7.744 2.40463 7.7314C2.37426 7.71879 2.34667 7.70032 2.32345 7.67704Z" fill="#8C6CF0"/> </svg>
        </div>
        <?php endforeach; ?>
    </div>
</section>