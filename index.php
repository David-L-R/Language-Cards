<?php 
  
  function justFunction() {
    $result;

    $user_array = ['louisa', 'jonathan', 'corona'];
    $pets_array = array('dog', 'cat', 'bat');

    // $result = $user_array[2] . ' - ' . $pets_array[2];

    $combined_array = [];

    foreach ($user_array as $index => $name) {
      $combined_array[$name] = $pets_array[$index];
    }



    print_r($combined_array);

    return $result ?? "no result given";
  };


  $result = justFunction()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP tutorial</title>
  </head>
  <body>
    
    <h1>Hello <?php echo $result; ?></h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi itaque
      iste iusto ipsa! Officia, suscipit! Iusto magnam incidunt quas harum minus
      fugiat maxime facilis corrupti cum sunt. Doloremque inventore expedita
      ipsam corporis sint debitis hic necessitatibus, praesentium dolor sed
      magni, nulla, omnis mollitia explicabo architecto possimus ratione ab et
      nemo assumenda minus! Amet ullam mollitia distinctio id laudantium neque
      voluptates consequuntur quisquam illum. Sed nulla at illo placeat ullam
      rem consectetur officia debitis sequi! Quod provident blanditiis,
      exercitationem nostrum iusto quasi accusantium ipsa libero, expedita
      aliquam eos at laborum enim odio, perspiciatis tempore assumenda accusamus
      voluptate quos distinctio commodi numquam neque. Itaque sit autem nulla
      iusto deserunt iste aspernatur voluptas placeat quasi dignissimos labore
      architecto quidem harum blanditiis tempore, consequuntur delectus. Sed et
      sit ab? Corrupti, dicta. Magni incidunt sit iure quo numquam est. Eius,
      excepturi? Blanditiis aliquid aspernatur amet praesentium eos in eius
      voluptatem temporibus modi inventore, tenetur accusamus a incidunt vel
      facilis omnis ut. Velit accusamus voluptates, similique possimus saepe
      expedita reprehenderit voluptatibus. Quos placeat tempora, odit eum porro
      ipsam quo temporibus earum, illum, excepturi ullam. Officia ea voluptas
      quas inventore eveniet cum a, fugiat, itaque illo consectetur unde,
      voluptatibus voluptatem nisi ratione. Officia, ipsam sequi consequuntur
      nesciunt dolorem quo explicabo eos, debitis consectetur molestias delectus
      maiores. Sequi tempora reiciendis nam voluptas vero dignissimos hic aut
      nemo corporis consectetur, magnam eligendi labore nostrum expedita
      nesciunt facere facilis neque incidunt minima? Rem at iure tempora, earum
      est temporibus eum officia, corporis praesentium porro perferendis
      assumenda sit ipsa iusto vitae et dolore eveniet! Maiores iste ullam
      accusamus illo fugiat porro fugit harum dolorum sint! Minima aliquid
      maxime quam sed. Dignissimos deleniti laboriosam at totam nobis, excepturi
      vitae, eos quam amet eaque libero tenetur sequi cupiditate autem laborum,
      iste repellat adipisci? Ea adipisci natus assumenda nulla, fuga in sed
      exercitationem hic sequi ipsa officiis reiciendis? Doloremque nulla,
      libero iure perferendis id maxime? Rem necessitatibus dicta molestias ad
      maiores itaque porro qui ipsa nam rerum enim sunt sapiente amet eum
      adipisci dolorum consequatur, exercitationem veritatis quod tempore
      eveniet, sequi maxime ex ea. Soluta omnis ad consequuntur expedita nisi
      vitae. Fugit itaque nostrum asperiores aspernatur perferendis assumenda.
      Cumque aperiam suscipit consequatur nihil et reiciendis placeat dolor
      illo, vitae minima eius cupiditate, laudantium amet nam adipisci magnam,
      tenetur facilis omnis nemo ex perspiciatis molestiae ad voluptatum? Earum
      tempore ipsum eos officiis possimus est, ex ea assumenda dicta iusto
      consectetur explicabo consequuntur doloribus velit voluptatem praesentium
      voluptatibus, omnis natus animi labore. Quibusdam doloremque voluptate a
      aspernatur. Culpa nostrum, ea maxime consequuntur repudiandae cupiditate
      consequatur dolores at. Pariatur tenetur sunt reprehenderit fuga nulla
      nobis exercitationem consectetur nemo temporibus earum, quaerat quam,
      totam accusantium! Dignissimos nisi in rerum beatae eius quam, repudiandae
      architecto doloremque ab, fugit illum ad est esse voluptate ipsum quas.
      Illo soluta autem voluptatum aut et suscipit, iste dolorum vitae adipisci,
      qui sit iure, aliquid sequi veritatis nemo aperiam eius dicta cumque
      corrupti nam ad consequuntur magni! At recusandae velit repellendus earum
      minus similique ea beatae, autem nisi cum fugit doloremque deleniti ipsum
      hic!
    </p>
  </body>
</html>
