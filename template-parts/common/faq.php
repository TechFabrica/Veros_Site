<section class="faq grid__container">
    <h2 class="faq__title grid__item--4-12"><?php the_field('faq__title'); ?></h2>
    <p class="faq__subtitle grid__item--4-12"><?php the_field('faq__subtitle'); ?></p>
    <?php
        $faq_data = get_field('faq__questions');
        foreach($faq_data as $item):
    ?>
    <details class="faq__container grid__item--4-12">
        <summary class="faq__question">
            <p><?php echo $item['faq__question'] ?></p>
            <svg class="faq__arrow-down" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.64592 4.64604C1.69236 4.59948 1.74754 4.56253 1.80828 4.53733C1.86903 4.51212 1.93415 4.49915 1.99992 4.49915C2.06568 4.49915 2.13081 4.51212 2.19155 4.53733C2.2523 4.56253 2.30747 4.59948 2.35392 4.64604L7.99992 10.293L13.6459 4.64604C13.6924 4.59955 13.7476 4.56267 13.8083 4.53752C13.8691 4.51236 13.9342 4.49941 13.9999 4.49941C14.0657 4.49941 14.1308 4.51236 14.1915 4.53752C14.2522 4.56267 14.3074 4.59955 14.3539 4.64604C14.4004 4.69253 14.4373 4.74772 14.4624 4.80846C14.4876 4.86919 14.5005 4.9343 14.5005 5.00004C14.5005 5.06578 14.4876 5.13088 14.4624 5.19162C14.4373 5.25236 14.4004 5.30755 14.3539 5.35404L8.35392 11.354C8.30747 11.4006 8.2523 11.4375 8.19155 11.4628C8.13081 11.488 8.06568 11.5009 7.99992 11.5009C7.93415 11.5009 7.86903 11.488 7.80828 11.4628C7.74754 11.4375 7.69236 11.4006 7.64592 11.354L1.64592 5.35404C1.59935 5.30759 1.56241 5.25242 1.5372 5.19167C1.512 5.13093 1.49902 5.06581 1.49902 5.00004C1.49902 4.93427 1.512 4.86915 1.5372 4.80841C1.56241 4.74766 1.59935 4.69248 1.64592 4.64604Z" fill="black" stroke="black"/> </svg>
            <svg class="faq__arrow-up" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3536 7.35384C13.3071 7.4004 13.252 7.43735 13.1912 7.46255C13.1305 7.48776 13.0654 7.50073 12.9996 7.50073C12.9338 7.50073 12.8687 7.48776 12.808 7.46255C12.7472 7.43735 12.692 7.4004 12.6456 7.35384L6.9996 1.70684L1.35359 7.35384C1.30711 7.40033 1.25192 7.4372 1.19118 7.46236C1.13044 7.48752 1.06534 7.50047 0.999595 7.50047C0.933851 7.50047 0.868751 7.48752 0.808011 7.46236C0.747272 7.4372 0.692082 7.40033 0.645595 7.35384C0.599107 7.30735 0.56223 7.25216 0.537071 7.19142C0.511912 7.13068 0.498963 7.06558 0.498963 6.99984C0.498963 6.93409 0.511912 6.86899 0.537071 6.80825C0.56223 6.74751 0.599107 6.69233 0.645595 6.64584L6.6456 0.645838C6.69204 0.599275 6.74722 0.562333 6.80796 0.537126C6.86871 0.511919 6.93383 0.498945 6.9996 0.498945C7.06536 0.498945 7.13048 0.511919 7.19123 0.537126C7.25197 0.562333 7.30715 0.599275 7.3536 0.645838L13.3536 6.64584C13.4002 6.69228 13.4371 6.74746 13.4623 6.80821C13.4875 6.86895 13.5005 6.93407 13.5005 6.99984C13.5005 7.06561 13.4875 7.13073 13.4623 7.19147C13.4371 7.25222 13.4002 7.30739 13.3536 7.35384Z" fill="black" stroke="black"/> </svg>
        </summary>
        <div class="faq__answer"><?php echo $item['faq__answer'] ?></div>
    </details>
    <?php endforeach; ?>
</section>