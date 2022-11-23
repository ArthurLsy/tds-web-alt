<?php
session_start()

?>
<div id="menu">
    <div href="" class="btn_menu" id="AP">
        <span class="projection projection_haut">Projets AP</span>
        <form action="rerender.php" method="post">
            <input hidden name="menu" value="0">
        </form>
        Projets AP
        <span class="projection projection_bas">Projets AP</span>
    </div>
    <div href="" class="btn_menu" id="TD">
        <span class="projection projection_haut">TDs SLAM</span>
        <form action="rerender.php" method="post">
            <input hidden name="menu" value="1">
        </form>
        TDs SLAM
        <span class="projection projection_bas">TDs SLAM</span>
    </div>
    <div href="" class="btn_menu" id="PERSO"><span class="projection projection_haut">Projets perso</span>Projets perso<span class="projection projection_bas">Projets perso</span></div>
</div>