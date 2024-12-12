<?php
namespace Pearlpuppy\CoCore\Hygeia;

global $sandra, $cocore;

echo '<h3>edition Hygeia / operation Pierre</h3>';

/**
 *
 */
$orb = Orbit::getInstance();
$star = Star::getInstance();

/**
 *  ===========================
 *  THE SANDRA BLOCK
 *  ---------------------------
 *  Assigns the outputs with
 *   hop()
 *  ---------------------------
 */
$sandra->hop($cocore, 'cocore');
$sandra->hop($star, 'star');
$sandra->hop($orb, 'orb');

/**
 *
 */
$foo = array(
    'fruits' => ['apple', 'banana', 'strawberry'],
    999,
    'gems' => ['diamond', 'amber', 'pearl'],
);
$recit = new \RecursiveArrayIterator($foo);

$recit['gems']['red'] = 'ruby';

$bar = array(
    'fruits' => ['orange'],
);

#$buzz = array_merge_recursive($recit, $bar);

$sandra->hop($recit, 'recit');
#$sandra->hop($buzz, 'buzz');

/**
 *  ---------------------------
 *  Free use
 *  ---------------------------
 */

/**
 *
 *
?>
<h3>IMG</h3>
<img src="<?php echo $orb->imgUri('icon-cocore.svg'); ?>" />

<?php
/**
 *
 *
$hoge = \Pearlpuppy\CoCore\Hygeia\St_Actions::wow();

?>
<pre>Foo:
<code>
<?php print_r($hoge); ?>
</code>
</pre>
<?php

/**
 *
 *
\Pearlpuppy\CoCore\Hygeia\St_Actions

?>

<?php

/**
 *
 */

/**
 *  ---------------------------
 *  
 *  ---------------------------
 */

/**
 *  ---------------------------
 *  ---------------------------
 */

/**
 *  ---------------------------
 *  ---------------------------
 */

/**
 *  ---------------------------
 *  ---------------------------
 *  ===========================
 */

//[EOF/*/