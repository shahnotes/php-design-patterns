<?php


class PapadFactory
{
    public static function makePapad($type, $weight = 500) {
        $papad = null;

        switch ($type) {
            case "PlainPapad":
                $papad = new UdadPapad();
                $papad->addIngredient('Udad', $weight);
                $papad->addIngredient('Salt', $weight * 0.001);
                break;
            case "MirchMasalaPapad":
                $papad = new MirchMasalaPapad();
                $papad->addIngredient('Udad', $weight);
                $papad->addIngredient('Mirch', $weight * 0.1);
                $papad->addIngredient('Masala', $weight * 0.2);
                $papad->addIngredient('Salt', $weight * 0.001);
                break;
            case "BlackPepperPapad":
                $papad = new BlackPepperPapad();
                $papad->addIngredient('Udad', $weight);
                $papad->addIngredient('black pepper', $weight * 0.1);
                $papad->addIngredient('Salt', $weight * 0.001);
                break;
            case "SaltyBlackPepperPapad":
                $papad = new BlackPepperPapad();
                $papad->addIngredient('Udad', $weight);
                $papad->addIngredient('black pepper', $weight * 0.1);
                $papad->addIngredient('Salt', $weight * 0.002);
                break;
            case "NSSBlackPepperPapad":
                $papad = new BlackPepperPapad();
                $papad->addIngredient('Udad', $weight);
                $papad->addIngredient('black pepper', $weight * 0.1);
                $papad->addIngredient('nss - Salt', $weight * 0.002);
                break;
            default:
                echo "We are not serving $type papad";
                break;
        }
        return $papad;
    }

    public static function massMakePapad($papad_types, $weight) {
        $papads = [];
        foreach ($papad_types as $type => $qty) {
            for ($i = 0;$i < $qty; $i++) {
                $papad = PapadFactory::makePapad($type,$weight);
                array_push($papads, $papad);
            }
        }
        return $papads;
    }
}