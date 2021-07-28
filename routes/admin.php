
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Appointments\ListAppointments;
use App\Http\Livewire\Admin\Appointments\CreateAppointmentForm;
use App\Http\Livewire\Admin\Appointments\UpdateAppointmentForm;
use App\Http\Livewire\Admin\Feedback\CreateFeedbackForm;
use App\Http\Livewire\Admin\Settings\UpdateSetting;
use App\Http\Livewire\Admin\Feedback\ListFeedback;

Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('users', ListUsers::class)->name('users');
    Route::get('appointments', ListAppointments::class)->name('appointments');
    Route::get('appointments/create', CreateAppointmentForm::class)->name('appointments.create');
    Route::get('appointments/{appointment}/edit', UpdateAppointmentForm::class)->name('appointments.edit');
    Route::get('settings', UpdateSetting::class)->name('settings');
    Route::get('feedback', ListFeedback::class)->name('feeback');
    Route::get('feedback/create', CreateFeedbackForm::class)->name('feedback.create');

