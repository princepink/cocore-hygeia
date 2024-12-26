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
#$sandra->hop($orb->productDir('product.json'), '_jsons');
#$sandra->hop(defined('COCORE_FAMILIAR'), 'CF');
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

$arr_a = ['foo', 'bar', 'buzz'];
$arr_b = ['rock' => 'shout', 'jazz' => 'swing', 'hiphop' => 'rhyme'];
$itr_a = new \ArrayIterator($arr_a);
$itr_b = new \ArrayIterator($arr_b);
$appit = new \AppendIterator;
$appit->append($itr_a);
$appit->append($itr_b);

$sandra->hop($appit->getArrayIterator(), 'appit');
$sandra->hop($recit, 'recit');
$sandra->hop([...$foo], '...foo');
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