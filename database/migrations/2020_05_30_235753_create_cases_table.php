<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('building_id');
            $table->string('subject');
            $table->text('description');
            $table->enum('type', ['Defects', 'Irrigation', 'Repair & Maintenance', 'Common Repairs', 'Replacements', 'Gardening', 'Incident', 'Cleaning']);
            $table->dateTime('due_date');
            $table->enum('priority', ['urgent', 'high', 'medium', 'low']);
            $table->enum('status', ['new', 'in progress', 'completed', 'deleted', 'awaiting approval']);
            $table->enum('job_area', ['Common - Asset', 'Common -Non Asset', 'Private Lot']);
            $table->enum('category', ['Air Conditioning', 'Common Area', 'Electrical', 'Gym', 'Hot Water', 'Lights', 'Lifts']);
            $table->unsignedBigInteger('contractor_id');
            $table->boolean('has_attachment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
