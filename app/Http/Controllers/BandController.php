<?php

namespace App\Http\Controllers;

class BandController extends Controller
{
    public function getAll()
    {
        $bands = $this->getBands();

        return response()->json($bands);
    }

    public function getById($gender)
    {
        dd($gender);
        $band = [];

        foreach ($this->getBands() as $_band) {
            if ($band['gender'] == $gender) {
                $band[] = $_band;
            }

            return response()->json($band);
        }
    }

    protected function getBands()
    {
        return [
            [
                'id' => 1, 'name' => 'Metallica', 'gender' => 'Metal', 'active' => true,
            ],
            [
                'id' => 2, 'name' => 'Iron Maiden', 'gender' => 'Metal', 'active' => false,
            ],
            [
                'id' => 3, 'name' => 'Rammstein', 'gender' => 'Rock', 'active' => true,
            ],
            [
                'id' => 4, 'name' => 'Linkin Park', 'gender' => 'Rock', 'active' => true,
            ],
        ];
    }
}
