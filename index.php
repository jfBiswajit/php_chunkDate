function chunkDate($dateStr) {

        $createdAt=date_create($dateStr);
        $today=date_create(date('Y-m-d'));
        $diff=date_diff($createdAt, $today);

        $days = $diff->days;
        $month = floor($days / 30) ;
        $year = floor($month / 12);

        if ($days < 30) {
          return $days . ' days ago';
        } elseif ($month <= 12) {
          return $month . ' month ago';
        } else {
          return $year . ' years ago';
        }
      }

      echo chunkDate('2020-01-12');
