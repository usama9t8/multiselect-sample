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

    public function downloadPdf(Request $request) {
        $data = $request->get('data', []);
        $pdf = \PDF::loadView('pdf.document', ['data' => $data]);
        return $pdf->download('document.pdf');
    }

    public function downloadDoc(Request $request) {
        $data = $request->get('data', []);
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
