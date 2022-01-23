<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\BaseModels\Tests;

use Illuminate\Database\Eloquent\Model;
use BrokeYourBike\UidKeys\Database\Eloquent\Ulid;
use BrokeYourBike\BaseModels\BaseUlid;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class BaseUlidTest extends \Orchestra\Testbench\TestCase
{
    /** @test */
    public function fixture_extends_base()
    {
        $parent = get_parent_class(BaseUlidModelFixture::class);
        $this->assertSame(BaseUlid::class, $parent);
    }

    /** @test */
    public function it_uses_uuid(): void
    {
        $usedTraits = class_uses(BaseUlid::class);
        $this->assertArrayHasKey(Ulid::class, $usedTraits);
    }

    /** @test */
    public function it_extends_eloquent_model(): void
    {
        $parent = get_parent_class(BaseUlid::class);
        $this->assertSame(Model::class, $parent);
    }

    /** @test */
    public function it_uses_milliseconds_in_date_format()
    {
        $model = new BaseUlidModelFixture();
        $this->assertSame('Y-m-d H:i:s.u', $model->getDateFormat());
    }

    /** @test */
    public function it_has_string_key_type()
    {
        $model = new BaseUlidModelFixture();
        $this->assertSame('string', $model->getKeyType());
    }

    /** @test */
    public function it_uses_not_incrementing_ids()
    {
        $model = new BaseUlidModelFixture();
        $this->assertSame(false, $model->getIncrementing());
    }

    /** @test */
    public function it_does_not_guard_attributes_by_default()
    {
        $model = new BaseUlidModelFixture();
        $this->assertSame([], $model->getGuarded());
    }
}
