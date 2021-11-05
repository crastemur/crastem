<?php 
    echo '
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <!--
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="../index.php">Acasă</a>
                </li>
                <li>
                    <a href="../shop.php">Produse</a>
                    <ul>
                        <li>
                            <a href="../diag.php">Unelte diagnoză</a>
                            <ul>
                                <li><a href="../diag.php">Toate produsele</a></li>
                                <li><a href="../diag.php#servis">Diagnoză Pro-Level<span class="tip tip-new">Nou</span></a></li>
                                <li><a href="../diag.php#profi">Diagnoză DIY<span class="tip tip-hot">Hot</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../battery.php">Unelte baterii</a>
                            <ul>
                                <li><a href="../battery.php">Toate produsele<span class="tip tip-new">Nou</span></a></li>
                                <li><a href="../battery.php#tester">Testere baterie</a></li>
                                <li><a href="../battery.php#charger">Încărcătoare baterie</a></li>
                                <li><a href="../battery.php#starter">Jump starter</a></li>
                                <li><a href="../battery.php#station">Power station</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../shop.php#keyprog">Programare chei</a>
                            <ul>
                                <li><a href="../shop.php#keyprog">Programare chei<span class="tip tip-new">Nou</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../blogs.php">Bloguri</a>
                </li>
                <li>
                    <a href="../about.php">Despre</a>
                </li>
                <li>
                    <a href="../contact.php">Contact</a>
                </li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>
    ';
?>