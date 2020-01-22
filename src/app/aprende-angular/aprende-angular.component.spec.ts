import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AprendeAngularComponent } from './aprende-angular.component';

describe('AprendeAngularComponent', () => {
  let component: AprendeAngularComponent;
  let fixture: ComponentFixture<AprendeAngularComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AprendeAngularComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AprendeAngularComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
