import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RouterGearComponent } from './router-gear.component';

describe('RouterGearComponent', () => {
  let component: RouterGearComponent;
  let fixture: ComponentFixture<RouterGearComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RouterGearComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RouterGearComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
