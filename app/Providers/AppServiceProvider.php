<?php

namespace App\Providers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Policies\AlunosPolicy;
use App\Policies\CursosPolicy;
use App\Policies\DisciplinasPolicy;
use App\Policies\ProfessorsPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Aluno::class, AlunosPolicy::class);
        Gate::policy(Curso::class, CursosPolicy::class);
        Gate::policy(Professor::class, ProfessorsPolicy::class);
        Gate::policy(Disciplina::class, DisciplinasPolicy::class);

    }
}
