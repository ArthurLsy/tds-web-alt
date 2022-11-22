<?php
$yamlContent=yaml_parse_file('exemple.yaml');
echo '<pre>'.print_r($yamlContent, true).'</pre>';

$menu=$yamlContent['menu'];
echo "<ul>";
foreach ($menu as $elm) {
    echo "<li>$elm</li>";
}
echo "</ul>";
?>