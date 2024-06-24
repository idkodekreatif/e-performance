<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function deleteCodeFile(Request $request)
    {
        // Validasi request
        $request->validate([
            'file_path' => 'required|string',
            'api_key' => 'required|string',
        ]);

        // Periksa API key
        $apiKey = $request->input('api_key');
        if ($apiKey !== env('API_KEY')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Path file yang akan dihapus
        $filePath = $request->input('file_path');

        // Periksa apakah file ada dan hapus file
        if (File::exists($filePath)) {
            File::delete($filePath);
            return response()->json(['message' => 'File deleted successfully']);
        } else {
            return response()->json(['message' => 'File not found'], 404);
        }
    }
}
