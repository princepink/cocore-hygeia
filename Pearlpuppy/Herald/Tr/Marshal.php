<?php
namespace Pearlpuppy\Herald;

/**
 *  Utilities for arrays and iterators.
 *  @since ver. 0.5.3 (edit. Sovereign)
 */
trait Tr_Marshal {

    /**
     *    Flips keys and values. No loss from original keys, they are returned as arrayed values.
     *    @param    $array    (array) Single dementioned array.
     */
    public static function stayn_flip($array) {
        $new_array = array();
        foreach ($array as $key => $value) {
            $new_array[$value][] = $key;
        }
        return $new_array;
    }

    /**
     *    Flattens multi dimensional array.
     *    Associative keys will be resigned.
     */
    public static function suplex($array) {
        $suplexed = array();
        array_walk_recursive($array, function ($value) use (&$suplexed) {
            $suplexed[] = $value;
        });
        return $suplexed;
    }

    /**
     *  Merges  2D arrays recursively.
     *  @since  ver. 0.5.3 (edit. Sovereign)
     *  @update ver. 0.11.0 (edit. Pierre)
     */
    public static function frankensteiner(&$array1, $array2, $unique = false) {
        foreach ($array2 as $key => $val) {
            if (is_array($val) && isset($array1[$key]) && is_array($array1[$key])) {
                if ($unique) {
                    $array1[$key] = array_unique(array_merge($array1[$key], $val));
                } else {
                    $array1[$key] = array_merge($array1[$key], $val);
                }
            } else {
                $array1[$key] = $val;
            }
        }
    }

    /**
     *    Member props operator.
     *    @param    $operand    (array)    Reference of a member property typed array.
     */
    public static function manipulator(&$operand, $key = null, $value = null, $default = array()) {
        if (!$key && !$value) {
            return $operand;
        }
        if (!$value) {
            if (isset($operand[$key])) {
                return $operand[$key];
            } else {
                return $default;
            }
        }
        $operand[$key] = $value;
        return true;
    }

    /**
     *    Retrieves a value from an associative array by both ways - keyword|index.
     *    @param    $key    string|integer    
     *    @param    $prop    string|array    This must be an associative array.
     */
    public static function elbowDrop($key, $prop) {
        if (is_array($prop)) {
            $a = $prop;
        } elseif (is_string($prop) && isset(static::${$prop})) {
            $a = static::${$prop};
        } else {
            return false;
        }
        if (is_string($key)) {
            return $a[$key];
        } elseif (is_int($key)) {
            return array_values($a)[$key];
        } else {
            return false;
        }
    }

    /**
     *    Provides 2 dimensions matrix (rows x columns) array of integers.
     *    @param    $maxima    (array) An array of each column's length (maximum number).
     *        e.g. To use range of 0-2 integers, the length is 3. = count([0,1,2])
     */
    public static function matrix(array $maxima) {
        $colsum = count($maxima);
        $rowsum = array_product($maxima);
        $colend = $colsum - 1;
        $n = array_pad(array(), $colsum, 0);        // memory of each column's number
        $matrix = array();
        $mov = false;
        for ($r = 0; $r < $rowsum; $r++) {
            $rec = array();
            for ($c = $colend; $c >= 0; $c--) {
                if ($c == $colend) {        // the right end
                    if ($n[$c] == $maxima[$c]) {
                        $n[$c] = 0;
                        $mov = true;
                    } else {
                        $mov = false;
                    }
                    $rec[$c] = $n[$c]++;
                } else {
                    if ($mov) {
                        if (++$n[$c] == $maxima[$c]) {
                            $n[$c] = 0;
                        } else {
                            $mov = false;
                        }
                    }
                    $rec[$c] = $n[$c];
                }
            }        // end of column loop
            ksort($rec);
            $matrix[$r] = $rec;
        }        // end of row loop
        return $matrix;
    }

    /**
     *  Checks if $iterator is associative (mapped) or not.
     *  @since  ver. 0.10.1 (edit. Pierre)
     */
    public static function isAssoc(iterable $iterator)
    {
        if (is_array($iterator)) {
            return (array_values($iterator) !== $iterator);
        } else {
            return true;
        }
    }

    /**
     *  @since  ver. 0.10.2 (edit. Pierre)
     */
    public static function recursiveIterator(iterable $recursive): \RecursiveIteratorIterator
    {
        $obj = $recursive;
        if (!$recursive instanceof \RecursiveArrayIterator) {
            $obj = new \RecursiveArrayIterator($recursive);
        }
        return new \RecursiveIteratorIterator($obj, \RecursiveIteratorIterator::SELF_FIRST);
    }

    /**
     *  @since  ver. 0.10.4 (edit. Pierre)
     */
    public static function jenga(int $int, iterable $array)
    {
        $index = $int % count($array);
        return $array[$index] ?? false;
    }

    /**
     *  @since  ver. 0.10.5 (edit. Pierre)
     */
    public static function sliceArrayCombine(array $keys, array $values): array
    {
        $ck = count($keys);
        $cv = count($values);
        switch ($ck <=> $cv) {
            case 1:
                $keys = array_slice($keys, 0, $cv);
                break;
            case -1:
                break;
                $values = array_slice($values, 0, $ck);
            default:
                break;
        }
        return array_combine($keys, $values);
    }

    /**
     *
     */

    /**
     *
     */

    /**
     *
     */

    /**
     *
     */

//[EOT]*/
}