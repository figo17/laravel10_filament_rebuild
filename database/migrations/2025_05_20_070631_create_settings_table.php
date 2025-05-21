<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul situs',
            'value'=>'website sederhana',
            'type'=>'text',
        ]);
          setting::create([
            'key'=>'_location',
            'label'=>'Alamat kantor',
            'value'=>'Malang,Jawa Timur,Indonesia',
            'type'=>'text',
        ]);
          setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://www.youtube.com/@figobayufirmansyah7178',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_linkedin',
            'label'=>'linkedin',
            'value'=>'https://www.linkedin.com/in/figo-bayu-firmansyah-850138225/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_github',
            'label'=>'github',
            'value'=>'https://github.com/figo17',
            'type'=>'text',
           ]);
           setting::create([
            'key'=>'_site_description',
            'label'=>'site description',
            'value'=>'web untuk menaklukan dunia',
            'type'=>'text',
           ]);
           

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
