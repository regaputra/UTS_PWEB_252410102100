<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_login_page_is_rendered_from_the_home_route(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('name="username"', false)
            ->assertDontSee(route('dashboard'))
            ->assertDontSee('Pengelolaan');
    }

    public function test_login_stores_the_username_in_the_session_and_redirects_to_dashboard(): void
    {
        $this->post(route('login.process'), ['username' => 'Rega'])
            ->assertRedirect(route('dashboard'))
            ->assertSessionHas('authenticated_username', 'Rega');

        $this->get(route('dashboard'))
            ->assertOk()
            ->assertSee('Selamat datang, Rega');
    }

    public function test_username_is_shown_on_dashboard_and_profile(): void
    {
        $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('dashboard'))
            ->assertOk()
            ->assertSee('Selamat datang, Rega');

        $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('profile'))
            ->assertOk()
            ->assertSee('Rega')
            ->assertSee('252410102100');
    }

    public function test_unauthenticated_requests_redirect_to_login(): void
    {
        foreach (['dashboard', 'pengelolaan', 'profile', 'welcome'] as $routeName) {
            $this->get(route($routeName, ['username' => 'Rega']))
                ->assertRedirect(route('login'));
        }

        $this->post(route('logout'))
            ->assertRedirect(route('login'));
    }

    public function test_authenticated_users_are_redirected_from_login_to_dashboard(): void
    {
        $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('login'))
            ->assertRedirect(route('dashboard'));
    }

    public function test_profile_displays_a_csrf_protected_logout_form(): void
    {
        $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('profile'))
            ->assertOk()
            ->assertSee('action="'.route('logout').'"', false)
            ->assertSee('name="_token"', false)
            ->assertSee('Logout');
    }

    public function test_logout_clears_the_session_and_redirects_to_login(): void
    {
        $this->withSession([
            'authenticated_username' => 'Rega',
            'private_data' => 'secret',
        ])
            ->post(route('logout'))
            ->assertRedirect(route('login'))
            ->assertSessionMissing('private_data')
            ->assertSessionHas('status', 'Anda berhasil logout.');
    }

    public function test_navigation_keeps_the_username_query_parameter(): void
    {
        $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('dashboard'))
            ->assertOk()
            ->assertSee(route('pengelolaan'))
            ->assertSee(route('profile'));
    }

    public function test_pengelolaan_renders_all_eight_members(): void
    {
        $response = $this->withSession(['authenticated_username' => 'Rega'])
            ->get(route('pengelolaan'))
            ->assertOk();

        foreach (['Rega Putra', 'Budi Santoso', 'Siti Rahmawati', 'Andi Pratama', 'Dinda Putri', 'Fajar Nugraha', 'Nabila Zahra', 'Rizky Maulana'] as $name) {
            $response->assertSee($name);
        }
    }

    public function test_all_main_pages_render_the_shared_layout(): void
    {
        foreach (['login', 'dashboard', 'pengelolaan', 'profile', 'welcome'] as $routeName) {
            $this->withSession($routeName === 'login' ? [] : ['authenticated_username' => 'Rega'])
                ->get(route($routeName))
                ->assertOk()
                ->assertSee('UTS PWEB 2026')
                ->assertSee('Organisasi Mahasiswa');
        }
    }

    public function test_login_requires_a_username(): void
    {
        $this->from(route('login'))
            ->post(route('login.process'), ['username' => ''])
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors('username');
    }

    public function test_login_rejects_a_username_containing_only_whitespace(): void
    {
        $this->from(route('login'))
            ->post(route('login.process'), ['username' => '   '])
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors('username');
    }
}
