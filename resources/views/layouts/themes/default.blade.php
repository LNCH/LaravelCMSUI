@extends('layouts._base')

@section('structure')
    <div class="page-wrapper">
        {{-- Navigation --}}
        <section class="main-navigation-wrapper">
            <div class="logo-panel">
                <p>Laravel CMS</p>
            </div>

            @include('layouts.partials.main-navigation')
        </section>

        {{-- Main Content --}}
        <main class="main-content-wrapper">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Tom Lynch</a></li>
                    <li class="active"><a href="#">Edit Details</a></li>
                </ul>
            </div>

            <div class="main-content">
                @yield('main_content')

                <h1 class="page-title">Monthly Orders</h1>

                <div class="panel">
                    <div class="header">
                        <h2>Monthly Sales</h2>
                    </div>
                    <div class="body">
                        <p>Etiam malesuada vulputate viverra. Donec a suscipit magna. In mollis volutpat volutpat.
                            Mauris bibendum molestie ipsum. Integer bibendum, ipsum sit amet tempor semper, tellus
                            tortor aliquam ex, eu tincidunt dolor erat in dolor. Mauris nunc turpis, vestibulum
                            convallis vehicula non, faucibus eget ante. Sed nibh orci, lobortis ut urna sed, dapibus
                            venenatis purus. Fusce faucibus in orci sed interdum. Quisque et velit in enim eleifend
                            interdum. Nam enim metus, sollicitudin non ante id, iaculis accumsan augue. Etiam eros
                            augue, convallis nec magna quis, auctor semper nisi.</p>
                    </div>
                    <div class="footer">
                        Footer content
                    </div>
                </div> <!-- End .panel -->

                <div class="panel">
                    <div class="header">
                        <h2>System Users</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Date of Birth</th>
                                <th>Average Score</th>
                                <th>Registered</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>Lead Developer</td>
                                <td>24/06/1989</td>
                                <td>4.7</td>
                                <td><span class="yes">Yes</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>Lead Developer</td>
                                <td>24/06/1989</td>
                                <td>4.7</td>
                                <td><span class="yes">Yes</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>Lead Developer</td>
                                <td>24/06/1989</td>
                                <td>4.7</td>
                                <td><span class="yes">Yes</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>Lead Developer</td>
                                <td>24/06/1989</td>
                                <td>4.7</td>
                                <td><span class="yes">Yes</span></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- End .panel -->

            </div>

            {{-- Main Footer --}}
            <footer class="main-footer">
                Design & built by LNCH UK | &copy; Copyright {{ date('Y') }}
            </footer>
        </main>
    </div>
@endsection