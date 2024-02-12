<?php
    if(isset($_GET['select-filter']))
    {
        if ($_GET['select-filter'] == 'latest') $sql = "SELECT * FROM posty ORDER BY posty.data DESC";
        else if($_GET['select-filter'] == 'hardest') $sql = "SELECT * FROM posty ORDER BY posty.wartosc_punkty DESC";
        else if($_GET['select-filter'] == 'easiest') $sql = "SELECT * FROM posty ORDER BY posty.wartosc_punkty ASC";
    }
    else $sql = "SELECT * FROM posty ORDER BY posty.data DESC";


    $res = $con->query($sql);

    if ($res->num_rows > 0) 
    {
        while($row = $res->fetch_assoc()) 
        {
            $publish_date = strtotime($row["data"]);
            $current_time = time();
            $time_diff = $current_time - $publish_date;
            
            if ($time_diff < 60) $time_ago = $time_diff . " sekund temu";
            elseif ($time_diff < 3600) $time_ago = floor($time_diff / 60) . " minut temu";
            elseif ($time_diff < 86400) $time_ago = floor($time_diff / 3600) . " godzin temu";
            elseif ($time_diff < 2592000) $time_ago = floor($time_diff / 86400) . " dni temu";
            else $time_ago = floor($time_diff / 2592000) . " miesięcy temu";

            echo '<div class="post container ">
                    <div class="row post-upper pt-3">
                        <div class="col-1">
                            <div class="post-profile"></div>
                        </div>
                        <div class="col-10">
                            <div class="post-content-preview">' . $row["wiadomosc"] . '</div>
                        </div>
                    </div>
                    <div class="row post-lower">
                        <div class="col-8 d-flex justify-content-center gap-4 align-items-center">
                            <div class="post-date">' . $time_ago . '</div>
                            <div class="post-topic">' . $row["przedmiot"] . '</div>
                            <div class="post-point-value">+' . $row["wartosc_punkty"] . ' pkt</div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <button class="button-answer">Odpowiedz</button>
                        </div>                        
                    </div>
                </div>';
        }
    } else echo "Brak postów do wyświetlenia.";
?>