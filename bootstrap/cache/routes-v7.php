<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zS54QaAvcDMEXvPp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/hi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EikKbPwxPwJiBzVy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZzp1gR7cZEoAs6A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::37PjcLHo0v5m1c4f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WiwdHOIsqv6BQPMH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B5rlXogiL2Oclm5d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jKzEDKw88FpqXoBU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2UcnNObi0hZBAv4u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tYpUr4YgMNlTaYR8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mif9wMRy4c8hEJJg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/adminSummary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8b99QymLdBTnkJRx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/companySummary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yB1XtlBYjTjYd2FK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidateSummary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::daH5XuHhfozUPvmy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PTPycpXyWcL1UGH9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dck5BFx37KiLg5Dz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wmRJDrCEZdTgnlC0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recentJob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zfr8b08jlqkTzyfu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recentBlog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JUqYhuWuBJmSn3dn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jrhm9h19vjuovRd4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/profilePreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::flLbXTF8N3QWQBqh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/candidateprofileSelected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZl6PoCC4WEG7FDJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/candidateprofileRejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bDOEnHoSTWpXyEIT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fuxcwrEYY5Lp6OZx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8X9gw2zgFyLEArUT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o5EvPvFVjYCZtfFu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h0onYB4yyzf8XmxY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vtZavgH6DN9MeEiW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yMBfsH6MetLxc0g9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rmXX1vcqrPZgxvtF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogCatPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::slko2C0xlfqiESS0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yPmeckz7Qk5jlY2j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userRegistration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JNU8EEaDAttI8Kfb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sendOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yOQJaTgdznlHBEIG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/verifyOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J9ZZSMnLYcu0WBMg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WSklbY9ticePlNJg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NoF6nTSR0mSbZ9D8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HdW1mP4hVPRpiUcI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qMmQsMEs3HUcY2EY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qkhydimtG7QI0QCY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T0slFdbNjezQJfek',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0E0zAydD7dRt8UVJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/company-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DwRgSrVIY5AEXB8Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gGVe9u34Jh5yiItC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ae1J3Yyd3mxwBpZf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0OCl8aQ4p4BtWrhB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/employeeLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tIdtTpDDcRFN28nI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j2teVzjSOZbu1c14',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/empdashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFV9n2DXYSq4ygqp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/emplogout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AldQZYayrvq9gsYs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/companyLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QMQu447mdWBuVwbw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/companyRegistration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SsJ9DiAtAClV899m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/sendOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BC2QzGLMe6Ebb2Fo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/verifyOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMrzXXn4evODpZN9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/resetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tRoAJycXElsjmX5w',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RDFphW9fOVOiLsA2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/company-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JB1bjDX9ZrQcXtXh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/companyProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJO268vNLYMxa2Ez',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/rolePage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xBJB7ZVhR74R0Kad',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/employeePage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DAtbVfIBomsrmi6I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8oUfUhAXqKVFkw4T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/create-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MBvJdHjzY5GnksJa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/list-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gBcbBp0ql6zodQ6U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/update-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7aPVrHMhVkpEIHDq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/employee-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XiqS5geRf3k9IicT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/delete-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kvxfNrLT9c8SX95u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/list-permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HpPoqRKSH0Eq6QeU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/create-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tE4VzfP6tUyuyDa3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/list-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f4F8tJnmR6lzOkHh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/update-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lGyqnQST9mPx6hGV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/role-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kMKqOl8zmPs9hSZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/delete-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QkGovaRDRfnIhh6f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/blogPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WuWOajvQQJTl7htI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uPuUn8qJRBjYznvd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6BupVv7FYtvd1LZJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidate-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hU8IHsFnJy4hfeaK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pHj9aKZD27ZK1hRE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wsaWabcOhg8e4a2e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jzgX7XEZoEpBEyTS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateEducation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HiFLmYxqgmNfHP6h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/create-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lLKf2kSuMXVePLX8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/list-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TUuVAL9XI4iQwTeZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/update-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QlczDL2sUluyyJuX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/education-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YIImuvxJXpaFJvAp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/delete-education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EhChzHeD7ciYFOwo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateTraining' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FV9uOm8t3U1o5g2S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/create-training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ms6YqPQd04U2lWAQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/list-training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KfB01Fa08YJ6o1hD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/update-training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::15v5TRkEoD63LP2U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/training-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J09ERKHmBOfbkdWT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/delete-training' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BMBXQKt5sLIj7nlM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateJob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cw87FXjALgNlOWeP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/create-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3GfcG7jaj6xOhvUM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/list-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::stO0WOzMZZIRD9Sf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/update-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ar05To5dvVZ5eeZl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/job-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HMW6JF4esDRara8P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/delete-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T04Zlnli753tjw5H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yq9Tf7pcB4P2f2fj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateRegistration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PgYm9WJOAhYKsqg6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/sendOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dH9fanvm4O5nxDGj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/verifyOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PS391O8LzU8nNc7d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/resetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6kRz3O43pQuk6IEu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1RjE2xMnw3jNYyrB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidate-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YMfY8PDFPslfXmdo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/candidateProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kI2ZG9j4JDRUSuyu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yJmzZ3dyuZTJfvnE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/jobapplication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hjZs0BOoqeWj2KUa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/candidate/jobapplicationPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8UwvZ9OZuUqXZmIW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recentBlogPosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOekEbAT6ijt0CQ4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchblog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K7SabmUMxgq45jOQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::61oJ59kiBorsz2Kb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jobCats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mabaDWbB90H6nHVO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recentJobPosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xMckgQ07cz9HcLJt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pluginPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bzCILXZRfIc2Yvo7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/pluginPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CSXpWlZAVmXnVZLx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::39Ugg8QozuvynFEh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EfRGvBW8GQ6Zc0AP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/aboutPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fTfmlXKxzEWJnFhL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XE4CbfrjA8Me6uJD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SoFEWROq5LxI27iD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y9hdcpWluExx7Aiw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5FasAcLpGMKFTDGj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-jobpage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4tftF9p5JSxnnqdu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jobPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6UgmnQvtxfVKxRWZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UcJnOQEpI96ZdAcr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::it8jw2s5OKuV1IL0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IihVUTvDAZGwWnRN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-job-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vcdMOY8tITJP4pzc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-job-com-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qhh4GxvUZXvKzKqP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-job-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UEXfQ5W0FundBz7b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-job-user-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sMQumaLE6Cdx23AA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o6iZc4sbdN1vYJni',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqdZwzbu4kO29bTZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C5NBXDzqZpMxXQBr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dw59qZ1th2d8LbWP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DYqUsDTqcyITO6E4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-category-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tfz2QsNKGhH6qcSB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-category-company-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wC0syyhY7e2kY66H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-category-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3aa1JV75fxzenhj7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-category-user-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gIIOVlu8kOyiQZc2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G00W6YcvBYvKDVHO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KCQC2OkB85YSQkQV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PfCUoT0oExq67JMl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i2m1U31MiZm7D3CO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7DsPNKx1W1tZhimT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vc64XYiJaA3DOtiM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-com-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tmy5U9vjp9LLJ2XS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IObapcOxgpSkWuEO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-user-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SfAzOHUpnZa3Bp92',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sY1GOUm3jTsWi2A7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6XEYRsXGg4nVEPdM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SZCArj9Iv59jF9Ll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5bG257CKpQmKuKmX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BfL1SPwaLYr4ojYq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-category-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waOgDmnWhZnLltf5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-category-company-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ullULUX5lxHcBZ3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-category-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HPCgyvMrgqRCybol',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-blog-category-user-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PyxaKGXl04P7Vhtl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7zecroJ9hU6MQwGo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category-blog-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dkCvNZpy4PXEdVnv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6R5IM7EEzNbtGeSM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fRhgpa1HDHcecAeX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tS1eDQQovVHjlG5l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-page-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oiBOzuCHPhWjdtCw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-page-company-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pH8geB1notRmZrqb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-page-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rd9HvCASDMejBmZW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-page-user-emp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pVJjSkjPMzw6EsbN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AB25xUyT5R4qINgv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/page-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::trpsQAkAvKnn36SW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LmPewYHyN66868Fr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-plugin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4AvkiMCqFf5LSQMD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-plugin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SSuIj2FuuvByuN9c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-plugin-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H3VLDLGecYaqPPov',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-plugin-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PKpQ4yrplrZaFonZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-plugin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oSYhtlW6fFhTvzk6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/plugin-by-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R5AIDorGod3pBSLH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-plugin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YV9oSTId5c43Ta9l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/job(?|Category/([^/]++)(*:31)|/([^/]++)(*:47)|s/([^/]++)(?|(*:67)|/appliedCandidate(*:91)))|/blog(?|/([^/]++)(*:117)|Category/([^/]++)(*:142))|/c(?|andidate/(?|applyJob/([^/]++)(*:185)|jobPreView/([^/]++)(*:212))|ompany/(?|candidateprofilePreview/([^/]++)(*:263)|([^/]++)/jobApplicationsList(*:299)))|/plugin\\-pages/([^/]++)/toggle\\-visibility(*:351))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4gRemp5c64M8Ukw7',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      47 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ckaPCYMChEZyzL1K',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      67 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OcNMlDsPv02qfbNz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BR730WXDZtlKQ1ZS',
          ),
          1 => 
          array (
            0 => 'jobid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nh813SJsB80FtdWq',
          ),
          1 => 
          array (
            0 => 'blogId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f6BO8ym9Snmdbw7L',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jHh27RRTxD2irS1r',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYfxCQYuAGeldsjR',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFphD22TZwnaec5X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RCQnZZdluafDAsjv',
          ),
          1 => 
          array (
            0 => 'jobid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rPwosESwEwMbF9D7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zS54QaAvcDMEXvPp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005110000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zS54QaAvcDMEXvPp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EikKbPwxPwJiBzVy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/hi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:32:"function () {
    return \'Hi\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005100000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::EikKbPwxPwJiBzVy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZzp1gR7cZEoAs6A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserRegistration',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tZzp1gR7cZEoAs6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::37PjcLHo0v5m1c4f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogin',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::37PjcLHo0v5m1c4f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WiwdHOIsqv6BQPMH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WiwdHOIsqv6BQPMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B5rlXogiL2Oclm5d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::B5rlXogiL2Oclm5d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jKzEDKw88FpqXoBU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@SendOTPCode',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@SendOTPCode',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jKzEDKw88FpqXoBU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2UcnNObi0hZBAv4u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@VerifyOTP',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@VerifyOTP',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2UcnNObi0hZBAv4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tYpUr4YgMNlTaYR8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@ResetPassword',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@ResetPassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tYpUr4YgMNlTaYR8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mif9wMRy4c8hEJJg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Mif9wMRy4c8hEJJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8b99QymLdBTnkJRx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'adminSummary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForAdmin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForAdmin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8b99QymLdBTnkJRx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yB1XtlBYjTjYd2FK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'companySummary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yB1XtlBYjTjYd2FK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::daH5XuHhfozUPvmy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidateSummary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CandidateTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForCandidate',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\DashboardController@SummaryForCandidate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::daH5XuHhfozUPvmy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PTPycpXyWcL1UGH9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:439:"function (\\Illuminate\\Http\\Request $request) {
  $term = $request->input(\'term\');
  $jobs = \\App\\Models\\Job::where(\'title\', \'like\', "%{$term}%")->paginate(10);
  if ($jobs->isEmpty()) {
    return \\App\\Helper\\ResponseHelper::Out(
        \'fail\',
        "No Job available.",
        200
    );
} else {
    return \\App\\Helper\\ResponseHelper::Response(
        \'success\',
        "Search with title.",
        $jobs,
        200
    );
}

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005200000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PTPycpXyWcL1UGH9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4gRemp5c64M8Ukw7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobCategory/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@getJobsByCategory',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@getJobsByCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4gRemp5c64M8Ukw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dck5BFx37KiLg5Dz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\AboutFrontController@index',
        'controller' => 'App\\Http\\Controllers\\frontend\\AboutFrontController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Dck5BFx37KiLg5Dz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wmRJDrCEZdTgnlC0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\frontend\\ContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wmRJDrCEZdTgnlC0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zfr8b08jlqkTzyfu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recentJob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@index',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zfr8b08jlqkTzyfu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JUqYhuWuBJmSn3dn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recentBlog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JUqYhuWuBJmSn3dn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ckaPCYMChEZyzL1K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@jobDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@jobDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ckaPCYMChEZyzL1K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nh813SJsB80FtdWq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blogId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nh813SJsB80FtdWq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jrhm9h19vjuovRd4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\ContactController@sendEmail',
        'controller' => 'App\\Http\\Controllers\\frontend\\ContactController@sendEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jrhm9h19vjuovRd4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jHh27RRTxD2irS1r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/applyJob/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@applyJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@applyJob',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jHh27RRTxD2irS1r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYfxCQYuAGeldsjR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/jobPreView/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@jobPreView',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@jobPreView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eYfxCQYuAGeldsjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::flLbXTF8N3QWQBqh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/profilePreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@profilePreview',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobApplicationController@profilePreview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::flLbXTF8N3QWQBqh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFphD22TZwnaec5X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/candidateprofilePreview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofilePreview',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofilePreview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uFphD22TZwnaec5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZl6PoCC4WEG7FDJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/candidateprofileSelected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofileSelected',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofileSelected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CZl6PoCC4WEG7FDJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bDOEnHoSTWpXyEIT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/candidateprofileRejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofileRejected',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@candidateprofileRejected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bDOEnHoSTWpXyEIT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fuxcwrEYY5Lp6OZx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fuxcwrEYY5Lp6OZx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8X9gw2zgFyLEArUT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserRegistration',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8X9gw2zgFyLEArUT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o5EvPvFVjYCZtfFu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::o5EvPvFVjYCZtfFu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h0onYB4yyzf8XmxY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@SendOTPCode',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@SendOTPCode',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::h0onYB4yyzf8XmxY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vtZavgH6DN9MeEiW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@VerifyOTP',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@VerifyOTP',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vtZavgH6DN9MeEiW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yMBfsH6MetLxc0g9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\ResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@ResetPassword',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@ResetPassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yMBfsH6MetLxc0g9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmXX1vcqrPZgxvtF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogPageAdmin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogPageAdmin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rmXX1vcqrPZgxvtF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::slko2C0xlfqiESS0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogCatPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@blogCatPageAdmin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@blogCatPageAdmin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::slko2C0xlfqiESS0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yPmeckz7Qk5jlY2j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@LoginPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@LoginPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yPmeckz7Qk5jlY2j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JNU8EEaDAttI8Kfb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userRegistration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@RegistrationPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@RegistrationPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JNU8EEaDAttI8Kfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yOQJaTgdznlHBEIG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sendOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@SendOtpPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@SendOtpPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yOQJaTgdznlHBEIG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J9ZZSMnLYcu0WBMg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/verifyOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@VerifyOTPPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@VerifyOTPPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::J9ZZSMnLYcu0WBMg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WSklbY9ticePlNJg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\ResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@ResetPasswordPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@ResetPasswordPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WSklbY9ticePlNJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NoF6nTSR0mSbZ9D8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserLogout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NoF6nTSR0mSbZ9D8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HdW1mP4hVPRpiUcI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\admin\\AdminUserController@UserProfile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HdW1mP4hVPRpiUcI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMmQsMEs3HUcY2EY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@ProfilePage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@ProfilePage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qMmQsMEs3HUcY2EY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qkhydimtG7QI0QCY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\TokenVerificationMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@DashboardPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\admin\\AdminController@DashboardPage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qkhydimtG7QI0QCY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T0slFdbNjezQJfek' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyLogin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyLogin',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::T0slFdbNjezQJfek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0E0zAydD7dRt8UVJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyRegistration',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::0E0zAydD7dRt8UVJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DwRgSrVIY5AEXB8Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/company-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::DwRgSrVIY5AEXB8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gGVe9u34Jh5yiItC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@SendOTPCode',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@SendOTPCode',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::gGVe9u34Jh5yiItC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ae1J3Yyd3mxwBpZf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@VerifyOTP',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@VerifyOTP',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::Ae1J3Yyd3mxwBpZf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OCl8aQ4p4BtWrhB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@ResetPassword',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@ResetPassword',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::0OCl8aQ4p4BtWrhB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tIdtTpDDcRFN28nI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/employeeLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@EmployeeLoginpage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@EmployeeLoginpage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::tIdtTpDDcRFN28nI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j2teVzjSOZbu1c14' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/employeeLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@CompanyEmpLogin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@CompanyEmpLogin',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::j2teVzjSOZbu1c14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFV9n2DXYSq4ygqp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/empdashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyEmpTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@EmpDashboardPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@EmpDashboardPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::rFV9n2DXYSq4ygqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AldQZYayrvq9gsYs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/emplogout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@CompanyEmpLogout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@CompanyEmpLogout',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::AldQZYayrvq9gsYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RCQnZZdluafDAsjv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/{jobid}/jobApplicationsList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@jobApplicationsList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@jobApplicationsList',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::RCQnZZdluafDAsjv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QMQu447mdWBuVwbw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/companyLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@LoginPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@LoginPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::QMQu447mdWBuVwbw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SsJ9DiAtAClV899m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/companyRegistration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@RegistrationPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@RegistrationPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::SsJ9DiAtAClV899m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BC2QzGLMe6Ebb2Fo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/sendOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@SendOtpPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@SendOtpPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::BC2QzGLMe6Ebb2Fo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMrzXXn4evODpZN9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/verifyOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@VerifyOTPPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@VerifyOTPPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::uMrzXXn4evODpZN9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tRoAJycXElsjmX5w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/resetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@ResetPasswordPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@ResetPasswordPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::tRoAJycXElsjmX5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RDFphW9fOVOiLsA2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyLogout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyLogout',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::RDFphW9fOVOiLsA2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JB1bjDX9ZrQcXtXh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/company-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyUserController@CompanyProfile',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::JB1bjDX9ZrQcXtXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PJO268vNLYMxa2Ez' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/companyProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@ProfilePage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@ProfilePage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::PJO268vNLYMxa2Ez',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xBJB7ZVhR74R0Kad' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/rolePage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@rolePage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@rolePage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::xBJB7ZVhR74R0Kad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DAtbVfIBomsrmi6I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/employeePage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeePage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeePage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::DAtbVfIBomsrmi6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8oUfUhAXqKVFkw4T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@DashboardPage',
        'controller' => 'App\\Http\\Controllers\\frontend\\companies\\CompanyController@DashboardPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::8oUfUhAXqKVFkw4T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MBvJdHjzY5GnksJa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/create-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@createEmployee',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@createEmployee',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::MBvJdHjzY5GnksJa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gBcbBp0ql6zodQ6U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/list-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeeList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeeList',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::gBcbBp0ql6zodQ6U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7aPVrHMhVkpEIHDq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/update-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@updateEmployee',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@updateEmployee',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::7aPVrHMhVkpEIHDq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XiqS5geRf3k9IicT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/employee-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeeByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@employeeByID',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::XiqS5geRf3k9IicT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kvxfNrLT9c8SX95u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/delete-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@deteleEmployee',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeController@deteleEmployee',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::kvxfNrLT9c8SX95u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HpPoqRKSH0Eq6QeU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/list-permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@permissionList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@permissionList',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::HpPoqRKSH0Eq6QeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tE4VzfP6tUyuyDa3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/create-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@createRole',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@createRole',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::tE4VzfP6tUyuyDa3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f4F8tJnmR6lzOkHh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/list-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@roleList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@roleList',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::f4F8tJnmR6lzOkHh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lGyqnQST9mPx6hGV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/update-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@updateEmployeeRole',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@updateEmployeeRole',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::lGyqnQST9mPx6hGV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kMKqOl8zmPs9hSZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/role-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@roleByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@roleByID',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::8kMKqOl8zmPs9hSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QkGovaRDRfnIhh6f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company/delete-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@deteleRole',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\company\\CompanyEmployeeRoleController@deteleRole',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::QkGovaRDRfnIhh6f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WuWOajvQQJTl7htI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/blogPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CompanyTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogPage',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'generated::WuWOajvQQJTl7htI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uPuUn8qJRBjYznvd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateLogin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateLogin',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::uPuUn8qJRBjYznvd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6BupVv7FYtvd1LZJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateRegistration',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::6BupVv7FYtvd1LZJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hU8IHsFnJy4hfeaK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/candidate-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::hU8IHsFnJy4hfeaK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pHj9aKZD27ZK1hRE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@SendOTPCode',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@SendOTPCode',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::pHj9aKZD27ZK1hRE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wsaWabcOhg8e4a2e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@VerifyOTP',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@VerifyOTP',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::wsaWabcOhg8e4a2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jzgX7XEZoEpBEyTS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CandidateResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ResetPassword',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ResetPassword',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::jzgX7XEZoEpBEyTS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HiFLmYxqgmNfHP6h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateEducation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::HiFLmYxqgmNfHP6h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLKf2kSuMXVePLX8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/create-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@createEducation',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@createEducation',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::lLKf2kSuMXVePLX8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TUuVAL9XI4iQwTeZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/list-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationListCandidate',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationListCandidate',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::TUuVAL9XI4iQwTeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QlczDL2sUluyyJuX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/update-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@updateEduacation',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@updateEduacation',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::QlczDL2sUluyyJuX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YIImuvxJXpaFJvAp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/education-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@educationByID',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::YIImuvxJXpaFJvAp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EhChzHeD7ciYFOwo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/delete-education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@deleteEducation',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateEducationController@deleteEducation',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::EhChzHeD7ciYFOwo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FV9uOm8t3U1o5g2S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateTraining',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@TrainingPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@TrainingPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::FV9uOm8t3U1o5g2S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ms6YqPQd04U2lWAQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/create-training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@createTraining',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@createTraining',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::ms6YqPQd04U2lWAQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KfB01Fa08YJ6o1hD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/list-training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@trainingListCandidate',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@trainingListCandidate',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::KfB01Fa08YJ6o1hD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::15v5TRkEoD63LP2U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/update-training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@updateTraining',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@updateTraining',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::15v5TRkEoD63LP2U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J09ERKHmBOfbkdWT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/training-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@trainingByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@trainingByID',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::J09ERKHmBOfbkdWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BMBXQKt5sLIj7nlM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/delete-training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@deleteTraining',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateTrainingController@deleteTraining',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::BMBXQKt5sLIj7nlM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cw87FXjALgNlOWeP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateJob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@JobPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@JobPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::cw87FXjALgNlOWeP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3GfcG7jaj6xOhvUM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/create-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@createJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@createJob',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::3GfcG7jaj6xOhvUM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::stO0WOzMZZIRD9Sf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/list-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@jobListCandidate',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@jobListCandidate',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::stO0WOzMZZIRD9Sf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ar05To5dvVZ5eeZl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/update-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@updateJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@updateJob',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::Ar05To5dvVZ5eeZl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HMW6JF4esDRara8P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/job-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@jobByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@jobByID',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::HMW6JF4esDRara8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T04Zlnli753tjw5H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'candidate/delete-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@deleteJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateJobController@deleteJob',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::T04Zlnli753tjw5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yq9Tf7pcB4P2f2fj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@LoginPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@LoginPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::Yq9Tf7pcB4P2f2fj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PgYm9WJOAhYKsqg6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateRegistration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@RegistrationPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@RegistrationPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::PgYm9WJOAhYKsqg6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dH9fanvm4O5nxDGj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/sendOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@SendOtpPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@SendOtpPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::dH9fanvm4O5nxDGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PS391O8LzU8nNc7d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/verifyOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@VerifyOTPPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@VerifyOTPPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::PS391O8LzU8nNc7d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6kRz3O43pQuk6IEu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/resetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CandidateResetPasswordMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ResetPasswordPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ResetPasswordPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::6kRz3O43pQuk6IEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1RjE2xMnw3jNYyrB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateLogout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateLogout',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::1RjE2xMnw3jNYyrB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YMfY8PDFPslfXmdo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidate-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateProfile',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@CandidateProfile',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::YMfY8PDFPslfXmdo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kI2ZG9j4JDRUSuyu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/candidateProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ProfilePage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@ProfilePage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::kI2ZG9j4JDRUSuyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJmzZ3dyuZTJfvnE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@DashboardPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@DashboardPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::yJmzZ3dyuZTJfvnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hjZs0BOoqeWj2KUa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/jobapplication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@jobapplication',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@jobapplication',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::hjZs0BOoqeWj2KUa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8UwvZ9OZuUqXZmIW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'candidate/jobapplicationPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@jobapplicationPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\candidate\\CandidateUserController@jobapplicationPage',
        'namespace' => NULL,
        'prefix' => '/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::8UwvZ9OZuUqXZmIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aOekEbAT6ijt0CQ4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recentBlogPosts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@recentBlogPosts',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@recentBlogPosts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aOekEbAT6ijt0CQ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K7SabmUMxgq45jOQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchblog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:444:"function (\\Illuminate\\Http\\Request $request) {
  $term = $request->input(\'term\');
  $blogs = \\App\\Models\\Blog::where(\'title\', \'like\', "%{$term}%")->paginate(10);
  if ($blogs->isEmpty()) {
    return \\App\\Helper\\ResponseHelper::Out(
        \'fail\',
        "No Blog available.",
        200
    );
} else {
    return \\App\\Helper\\ResponseHelper::Response(
        \'success\',
        "Search with title.",
        $blogs,
        200
    );
}

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005310000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K7SabmUMxgq45jOQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f6BO8ym9Snmdbw7L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogCategory/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@getBlogsByCategory',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@getBlogsByCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f6BO8ym9Snmdbw7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::61oJ59kiBorsz2Kb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::61oJ59kiBorsz2Kb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OcNMlDsPv02qfbNz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobView',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OcNMlDsPv02qfbNz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BR730WXDZtlKQ1ZS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobs/{jobid}/appliedCandidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@appliedCandidateView',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@appliedCandidateView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BR730WXDZtlKQ1ZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mabaDWbB90H6nHVO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobCats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@jobCatPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@jobCatPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mabaDWbB90H6nHVO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xMckgQ07cz9HcLJt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recentJobPosts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@recentJobPosts',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@recentJobPosts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xMckgQ07cz9HcLJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bzCILXZRfIc2Yvo7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pluginPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bzCILXZRfIc2Yvo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CSXpWlZAVmXnVZLx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/pluginPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@plugins',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@plugins',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CSXpWlZAVmXnVZLx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::39Ugg8QozuvynFEh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\AboutController@UserAbout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\AboutController@UserAbout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::39Ugg8QozuvynFEh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EfRGvBW8GQ6Zc0AP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\AboutController@updateAbout',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\AboutController@updateAbout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EfRGvBW8GQ6Zc0AP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fTfmlXKxzEWJnFhL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aboutPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\AboutController@aboutPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\AboutController@aboutPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fTfmlXKxzEWJnFhL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XE4CbfrjA8Me6uJD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@contactDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@contactDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XE4CbfrjA8Me6uJD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SoFEWROq5LxI27iD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@updateContactDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@updateContactDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SoFEWROq5LxI27iD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y9hdcpWluExx7Aiw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contactPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@contactPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\ContactPageController@contactPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::y9hdcpWluExx7Aiw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5FasAcLpGMKFTDGj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@jobDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@jobDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5FasAcLpGMKFTDGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4tftF9p5JSxnnqdu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-jobpage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@updateJobDetails',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@updateJobDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4tftF9p5JSxnnqdu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6UgmnQvtxfVKxRWZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jobPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@jobPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobPageController@jobPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6UgmnQvtxfVKxRWZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UcJnOQEpI96ZdAcr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@allPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@allPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UcJnOQEpI96ZdAcr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::it8jw2s5OKuV1IL0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@createJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@createJob',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::it8jw2s5OKuV1IL0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IihVUTvDAZGwWnRN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IihVUTvDAZGwWnRN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vcdMOY8tITJP4pzc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-job-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vcdMOY8tITJP4pzc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qhh4GxvUZXvKzKqP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-job-com-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListCompanyEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListCompanyEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qhh4GxvUZXvKzKqP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UEXfQ5W0FundBz7b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-job-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UEXfQ5W0FundBz7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sMQumaLE6Cdx23AA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-job-user-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListUserEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobListUserEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sMQumaLE6Cdx23AA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o6iZc4sbdN1vYJni' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@updateJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@updateJob',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o6iZc4sbdN1vYJni',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MqdZwzbu4kO29bTZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@jobByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MqdZwzbu4kO29bTZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C5NBXDzqZpMxXQBr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobController@deleteJob',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobController@deleteJob',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::C5NBXDzqZpMxXQBr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dw59qZ1th2d8LbWP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@createCat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@createCat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Dw59qZ1th2d8LbWP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DYqUsDTqcyITO6E4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@catList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@catList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DYqUsDTqcyITO6E4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tfz2QsNKGhH6qcSB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-category-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tfz2QsNKGhH6qcSB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wC0syyhY7e2kY66H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-category-company-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListCompanyEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListCompanyEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wC0syyhY7e2kY66H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3aa1JV75fxzenhj7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-category-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3aa1JV75fxzenhj7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gIIOVlu8kOyiQZc2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-category-user-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListUserEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@categoryListUserEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gIIOVlu8kOyiQZc2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G00W6YcvBYvKDVHO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@updateCat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@updateCat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::G00W6YcvBYvKDVHO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KCQC2OkB85YSQkQV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@catByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@catByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KCQC2OkB85YSQkQV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PfCUoT0oExq67JMl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@deletecat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\JobCategoryController@deletecat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PfCUoT0oExq67JMl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i2m1U31MiZm7D3CO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@createBlog',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@createBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i2m1U31MiZm7D3CO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7DsPNKx1W1tZhimT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7DsPNKx1W1tZhimT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vc64XYiJaA3DOtiM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Vc64XYiJaA3DOtiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tmy5U9vjp9LLJ2XS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-com-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListCompanyEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListCompanyEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tmy5U9vjp9LLJ2XS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IObapcOxgpSkWuEO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IObapcOxgpSkWuEO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SfAzOHUpnZa3Bp92' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-user-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListUserEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogListUserEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SfAzOHUpnZa3Bp92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sY1GOUm3jTsWi2A7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@updateBlog',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@updateBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sY1GOUm3jTsWi2A7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6XEYRsXGg4nVEPdM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blog-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@blogByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6XEYRsXGg4nVEPdM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SZCArj9Iv59jF9Ll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogController@deleteBlog',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogController@deleteBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SZCArj9Iv59jF9Ll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5bG257CKpQmKuKmX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@createCat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@createCat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5bG257CKpQmKuKmX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BfL1SPwaLYr4ojYq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@catList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@catList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BfL1SPwaLYr4ojYq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::waOgDmnWhZnLltf5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-category-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::waOgDmnWhZnLltf5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ullULUX5lxHcBZ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-category-company-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListCompanyEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListCompanyEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2ullULUX5lxHcBZ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HPCgyvMrgqRCybol' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-category-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HPCgyvMrgqRCybol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PyxaKGXl04P7Vhtl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-blog-category-user-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListUserEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@categoryListUserEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PyxaKGXl04P7Vhtl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7zecroJ9hU6MQwGo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@updateCat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@updateCat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7zecroJ9hU6MQwGo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dkCvNZpy4PXEdVnv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category-blog-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@catByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@catByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dkCvNZpy4PXEdVnv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6R5IM7EEzNbtGeSM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@deletecat',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\BlogCategoryController@deletecat',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6R5IM7EEzNbtGeSM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fRhgpa1HDHcecAeX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@createPage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@createPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fRhgpa1HDHcecAeX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tS1eDQQovVHjlG5l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tS1eDQQovVHjlG5l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oiBOzuCHPhWjdtCw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-page-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oiBOzuCHPhWjdtCw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pH8geB1notRmZrqb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-page-company-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListCompanyEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListCompanyEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pH8geB1notRmZrqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rd9HvCASDMejBmZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-page-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Rd9HvCASDMejBmZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pVJjSkjPMzw6EsbN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-page-user-emp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListUserEmp',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageListUserEmp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pVJjSkjPMzw6EsbN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AB25xUyT5R4qINgv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@updatePage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@updatePage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AB25xUyT5R4qINgv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::trpsQAkAvKnn36SW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'page-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@pageByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::trpsQAkAvKnn36SW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LmPewYHyN66868Fr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PageController@deletepage',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PageController@deletepage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LmPewYHyN66868Fr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4AvkiMCqFf5LSQMD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-plugin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@createPlugin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@createPlugin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4AvkiMCqFf5LSQMD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSuIj2FuuvByuN9c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-plugin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginList',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SSuIj2FuuvByuN9c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H3VLDLGecYaqPPov' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-plugin-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginListCompany',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginListCompany',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::H3VLDLGecYaqPPov',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PKpQ4yrplrZaFonZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-plugin-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginListUser',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginListUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PKpQ4yrplrZaFonZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oSYhtlW6fFhTvzk6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-plugin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@updatePlugin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@updatePlugin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oSYhtlW6fFhTvzk6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R5AIDorGod3pBSLH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'plugin-by-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginByID',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@pluginByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::R5AIDorGod3pBSLH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YV9oSTId5c43Ta9l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-plugin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@deleteplugin',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@deleteplugin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YV9oSTId5c43Ta9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rPwosESwEwMbF9D7' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'plugin-pages/{id}/toggle-visibility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\CommonTokenMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\v1\\PluginController@toggleVisibility',
        'controller' => 'App\\Http\\Controllers\\api\\v1\\PluginController@toggleVisibility',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rPwosESwEwMbF9D7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
