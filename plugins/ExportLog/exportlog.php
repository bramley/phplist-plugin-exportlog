<?php

$sql =
    "SELECT id, entered, page, entry
    FROM {$tables['eventlog']}
    WHERE entry LIKE '%deleted by bounce rule%'
    ORDER BY id";
$result = Sql_Query($sql);

ob_end_clean();
Header('Content-type: text/csv');
Header('Content-disposition:  attachment; filename=eventlog.csv');

$handle = fopen('php://output', 'w');
fputcsv($handle, array('id', 'entered', 'page', 'entry'));

while ($row = mysqli_fetch_row($result)) {
    fputcsv($handle, $row);
}
fclose($handle);
exit;
