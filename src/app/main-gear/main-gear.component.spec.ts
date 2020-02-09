import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MainGearComponent } from './main-gear.component';

describe('MainGearComponent', () => {
  let component: MainGearComponent;
  let fixture: ComponentFixture<MainGearComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MainGearComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MainGearComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
