<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="freq-ask">
                    <h1>FREQUENTLY ASKED QUESTIONS</h1>
                    <?php
                        $i=0;
                        foreach ($faqs as $row) {
                            $i++;
                            ?>
                            <div class="faq-item card">
                                <div class="faq-header" id="heading<?php echo $i; ?>">
                                    <button class="faq-button <?php if($i!=1) {echo 'collapsed';} ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><i class="fa fa-caret-down"></i><?php echo $row['faq_title']; ?></button>
                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i==1) {echo 'show';} ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="faq-body">
                                        <?php echo $row['faq_content']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    
                </div>
            </div>
        </div>
    </div>
