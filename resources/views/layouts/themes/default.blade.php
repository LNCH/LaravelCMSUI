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

            <div class="pre-header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Tom Lynch</a></li>
                        <li class="active"><a href="#">Edit Details</a></li>
                    </ul>
                </div>

                <div class="mobile-nav-open">
                    <button data-nav-open>
                        <i class="fad fa-bars"></i>
                    </button>
                </div> <!-- End .mobile-nav-open -->
            </div> <!-- End .pre-header -->


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
                        <p>Etiam malesuada vulputate viverra. Donec a suscipit magna. In mollis volutpat volutpat.
                            Mauris bibendum molestie ipsum. Integer bibendum, ipsum sit amet tempor semper, tellus
                            tortor aliquam ex, eu tincidunt dolor erat in dolor. Mauris nunc turpis, vestibulum
                            convallis vehicula non, faucibus eget ante. Sed nibh orci, lobortis ut urna sed, dapibus
                            venenatis purus. Fusce faucibus in orci sed interdum. Quisque et velit in enim eleifend
                            interdum. Nam enim metus, sollicitudin non ante id, iaculis accumsan augue. Etiam eros
                            augue, convallis nec magna quis, auctor semper nisi.</p>

                        <h3>Buttons</h3>

                        <p>
                            <button class="button primary">New User</button>
                            <button class="button secondary">Cancel</button>
                            <button class="button success">Save</button>
                            <button class="button error">Delete</button>
                        </p>

                        <p>
                            <button class="button primary outline">New User</button>
                            <button class="button secondary outline">Cancel</button>
                            <button class="button success outline">Save</button>
                            <button class="button error outline">Delete</button>
                        </p>

                        <p>
                            <button class="button primary small">New User</button>
                            <button class="button secondary small">Cancel</button>
                            <button class="button success small">Save</button>
                            <button class="button error small">Delete</button>
                        </p>

                        <p>
                            <button class="button primary x-small">New User</button>
                            <button class="button secondary x-small">Cancel</button>
                            <button class="button success x-small">Save</button>
                            <button class="button error x-small">Delete</button>
                        </p>

                        <div style="margin-bottom: 1.5rem;">
                            <h3>Colours</h3>
                            <div style="display: flex;">
                                <span class="bg-primary-lighter" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-primary-light" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-primary" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-primary-dark" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-primary-darker" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                            </div>
                            <div style="display: flex;">
                                <span class="bg-secondary-lighter" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-secondary-light" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-secondary" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-secondary-dark" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-secondary-darker" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                            </div>
                            <div style="display: flex;">
                                <span class="bg-success-lighter" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-success-light" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-success" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-success-dark" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-success-darker" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                            </div>
                            <div style="display: flex;">
                                <span class="bg-error-lighter" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-error-light" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-error" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-error-dark" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-error-darker" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                            </div>
                            <div style="display: flex;">
                                <span class="bg-warning-lighter" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-warning-light" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-warning" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-warning-dark" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                                <span class="bg-warning-darker" style="width: 75px; height: 75px; display: inline-block; background: red;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        Footer content
                    </div>
                </div> <!-- End .panel -->

                <div class="panel">
                    <div class="header">
                        <h2>System Users</h2>
                    </div>

                    <div class="body">
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
                    </div>
                </div> <!-- End .panel -->

            </div>

            {{-- Main Footer --}}
            <footer class="main-footer">
                Design & built by LNCH UK | &copy; Copyright {{ date('Y') }}
            </footer>
        </main>
    </div>
@endsection