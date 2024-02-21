<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function multiselect()
    {
        return view('multiselect');
    }

    public function getData(Request $request)
    {
        $values = $request->get('values', []);
        $data = $this->dummyData($values);
        return response()->json([
            'success' => true,
            'data' => $data ?? null
        ]);
    }
    
    private function dummyData($values) {
        $data = [
            ['name' => 'Vue.js', 'about' => "Vue.js is an open-source model–view–viewmodel front end JavaScript library for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members"],
            ['name' => 'Vue-Multiselect', 'about' => "Vue-Multiselect is a very flexible dropdown component to let us create dropdowns that can have pictures and dropdown items with formatting. We can also group dropdown options and enable multiple selections and tagging. It has integration with Vuex allows us to get and set options and values from the store"],
            ['name' => 'Vuelidate', 'about' => "Vuelidate 2 is a simple, but powerful, lightweight model-based validation for Vue.js 3 and 2. Vuelidate is considered model-based because the validation rules are defined next to your data, and the validation tree structure matches the data model structure."],
        ];

        return collect($data)->whereIn('name',$values);
    }

    public function downloadPdf(Request $request) {
        $values = $request->get('values', []);
        $data = $this->dummyData($values);
        $pdf = \PDF::loadView('pdf.document', ['data' => $data->toArray()]);
        return $pdf->download('document.pdf');
    }

    public function downloadDoc(Request $request) {
        $values = $request->get('values', []);
        $data = $this->dummyData($values);
        // Create a new PhpWord instance
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        foreach ($data as $item) {
            $section->addText($item['name'], ['bold' => true]);
            $section->addText($item['about']);
            // Add some spacing between items
            $section->addTextBreak(1);
        }

        $tempFilePath = storage_path('app/public/example.docx');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($tempFilePath);

        // Download the file
        return response()->download(storage_path('app/public/example.docx'));
    }
}
