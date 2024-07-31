// database/migrations/xxxx_xx_xx_xxxxxx_create_practices_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticesTable extends Migration
{
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->string('numero_pratica')->unique();
            $table->string('nome');
            $table->string('cognome');
            $table->string('cuaa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practices');
    }
}

